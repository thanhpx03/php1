<?php
$name=$_POST['name'];
$train_id=$_POST['train_id'];



$birth_date=$_POST['birth_date'];

$gender=$_POST['gender'];

$phone=$_POST['phone'];


$created_at=$_POST['created_at'];

$updated_at=$_POST['updated_at'];
$avatar=$_FILES['avatar'];
$img='./img/'.basename($avatar['name']);
move_uploaded_file($avatar["tmp_name"],$img);

$nameerr="";
$train_iderr="";
$birth_dateerr="";
$gendererr="";
$phoneerr="";
if(strlen($name)==0){
    $nameerr="hãy nhập tên";
}
if(strlen($train_id)==0){
    $train_iderr="hãy nhập train_id";
}
if(strlen($birth_date)==0){
    $birth_dateerr="hãy nhập ngay sinh";
}
if(strlen($gender)==0){
    $gendererr="hãy nhập gioi tinh";
}
if(strlen($phone)==0){
    $phoneerr="hãy nhập sdt";
}

if(!empty($nameerr) ||!empty($train_iderr) ||!empty($birth_dateerr) || !empty($gendererr)|| !empty($phoneerr)){
    header("location: add.php?nameerr=$nameerr&train_iderr=$train_iderr&birth_dateerr=$birth_dateerr&gendererr=$gendererr&phoneerr=$phoneerr");
    die;
}

$sql="insert into passengers (name,train_id,avatar,birth_date,gender,phone,created_at,updated_at)
values('$name','$train_id','$img','$birth_date','$gender','$phone','$created_at','$update_at')
";

$conect= new PDO('mysql:host=127.0.0.1;dbname=baithi;charset=utf8',"root","");
$stml=$conect->prepare($sql);
$stml->execute();
header('location: index.php');
?>