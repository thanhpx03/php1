<?php
$id=$_GET['id'];
$deleteQuery="delete form users where id=$id";
$connect= new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8","root","");
//nạp câu sql vao kết nối
$stmt=$connect->prepare($sqlQuery);
//3.2 thực thi câu sql với db
$stmt-> execute();
header("location:index.php");