<?php
$id=$_GET['id'];

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


if($avatar["name"]!=""){
    $sql=" update passengers set
name='$name',
train_id='$train_id',
avatar='$img',
birth_date='$birth_date',
gender='$gender',
phone='$phone',
created_at='$created_at',
updated_at='$updated_at'
where id=$id

";
}else{
    $sql=" update passengers set
name='$name',
train_id='$train_id',
birth_date='$birth_date',
gender='$gender',
phone='$phone',
created_at='$created_at',
updated_at='$updated_at'
where id=$id

";
}

$conect= new PDO('mysql:host=127.0.0.1;dbname=baithi;charset=utf8',"root","");
$stml=$conect->prepare($sql);
$stml->execute();
header('location: index.php');
?>