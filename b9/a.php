<?php 
// cách  sử dụng $_session
// dòng 1. khai báo gọi hàm 
session_start();
// 2 tạo mới 1 phần tử trong session thì đơn giản $_session('tên _phần _tử'= giá trị 

// cập nhật $_session('tên _phần _tử'= giá trị ;
// xóa 1 phần tử trong session : unset($_session('tên _phần _tử'= giá trị ));
// 3 xóa toàn bộ tất cả sesion của  web session__destroy();
// để vào trang  a.php thì càn kiểm tra  người dùng đã đăng nhập  hay k;
if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
    header('location: login.php');
    die;
}
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", 
    "root", "");
$sqlQuery = "select * from users";
$stmt = $connect->prepare($sqlQuery);
$stmt->execute();
$data = $stmt->fetchAll();
// var_dump($data);die;
?>
Hiện có <?= count($data) ?> tài khoản trong db
<!-- <a href="logout.php">Thoát</a> -->
Xin chào, <?= $_SESSION['auth']['name']?>. <a href="logout.php">Thoát</a>
