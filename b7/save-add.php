<?php
//nhận dữ liệu từ form
$name=$_POST['name'];
$email=$_POST['email'];
$password=password_hash($_POST['passwords'], PASSWORD_DEFAULT);
// xây dựng câu sql để inser
$insertQuery="insert into users
            (name,email,password) 
            values ('$name','$email','$password')";
            $connect= new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8","root","");
//nạp câu sql vao kết nối
$stmt=$connect->prepare($insertQuery);
//3.2 thực thi câu sql với db
$stmt->execute();
header("location: index.php");
?>