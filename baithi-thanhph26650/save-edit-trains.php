<?php
$id=$_GET['id'];

$name=$_POST['name'];
$train_number=$_POST['train_number'];

$ticket_price=$_POST['ticket_price'];


$cabin_number=$_POST['cabin_number'];




$created_at=$_POST['created_at'];

$updated_at=$_POST['updated_at'];


$sql=" update trains set
name='$name',
train_number='$train_number',
ticket_price='$ticket_price',
cabin_number='$cabin_number',

created_at='$created_at',
updated_at='$updated_at'
where id=$id

";

$conect= new PDO('mysql:host=127.0.0.1;dbname=baithi;charset=utf8',"root","");
$stml=$conect->prepare($sql);
$stml->execute();
header('location: index.php');
?>