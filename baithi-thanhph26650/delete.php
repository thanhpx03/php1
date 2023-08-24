<?php
$id=$_GET['id'];
$sql="delete from passengers where id=$id";
$conect= new PDO('mysql:host=127.0.0.1;dbname=baithi;charset=utf8',"root","");
$stml=$conect->prepare($sql);
$stml->execute();
header('location: index.php');
?>