<?php
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", 
"root", "");
session_start();
// câu lệch kt select count(*) form products  where sku="$sku"
//and id!= 2;
// 2 tạo mới 1 phần tử trong session thì đơn giản $_session('tên _phần _tử'= giá trị 

// cập nhật $_session('tên _phần _tử'= giá trị ;
// xóa 1 phần tử trong session : unset($_session('tên _phần _tử'= giá trị ));
// 3 xóa toàn bộ tất cả sesion của  web session__destroy();
// để vào trang  a.php thì càn kiểm tra  người dùng đã đăng nhập  hay k;
if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
    header('location: login.php');
    die;
}
//Nhận dữ liệu từ form
// var_dump($_POST);die;
$name=$_POST['name'];
$sku=$_POST['sku'];
$price=$_POST['price'];
$quantily=$_POST['quantily'];
$category_id=$_POST['cetegory_id'];
$detail=$_POST['detail'];

$image = $_FILES['img'];
// var_dump($image);die;
$filename = '../update/' . basename($image['name']);
// update img
move_uploaded_file($image["tmp_name"], $filename);

// kiểm tra dữ liệu 
$nameerr="";
$skuerr="";
$priceerr="";
$quantilyerr="";
$category_iderr="";
$detailerr="";
if(strlen($name)==0){
    $name="hãy nhập tên";
}
if(strlen($sku)==0){
    $skuerr="hãy nhập loại";

}
if(strlen($price)==0){
    $priceerr="hãy nhập giá";

}
if(strlen($quantily) ==0){
    $quantilyerr="hãy nhập số lượng";

}
if(strlen($category_id) ==0){
    $category_iderr="hãy nhập loại";

}
if(strlen($detail)==0){
    $detailerr="hãy nhập màu";

}
if(!empty($nameerr) || !empty($skuerr) || !empty($priceerr)|| !empty($quantilyerr)||!empty($category_iderr)||!empty($detailerr)){
    header("location: add-form.php?nameerr=$nameerr&skuerr=$skuerr&priceerr=$priceerr&quantilyerr=$quantilyerr&category_iderr=$category_iderr&detailerr=$detailerr");
    die;
}


//Xây dựng câu SQL để insert
$insertQuery="insert into products (name, sku, img,price,quantily,cetegory_id,detail)
                values('$name', '$sku', '$filename','$price','$quantily','$category_id','$detail')
";
//Tạo kết nối và thực thi câu lệnh với db

$stmt = $connect->prepare($insertQuery);
$stmt->execute();
header('location: index.php');

?>