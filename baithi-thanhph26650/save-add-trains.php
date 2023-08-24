<?php
$name=$_POST['name'];
$train_number=$_POST['train_number'];

$ticket_price=$_POST['ticket_price'];


$cabin_number=$_POST['cabin_number'];




$created_at=$_POST['created_at'];

$updated_at=$_POST['updated_at'];


$nameerr="";

$train_numbererr="";
$ticket_priceerr="";
$cabin_numbererr="";

if(strlen($name)==0){
    $nameerr="hãy nhập tên";
}
if(strlen($train_number)==0){
    $train_numbererr="hãy nhập train_number";
}
if(strlen($ticket_price)==0){
    $ticket_priceerr="hãy nhập ticket";
}
if(strlen($cabin_number)==0){
    $cabin_numbererr="hãy nhập cabin_number";
}

$sql="insert into trains (name,train_number,ticket_price,cabin_number,created_at,updated_at)
values('$name','$train_number','$ticket_price','$cabin_number','$created_at','$update_at')
";
if(!empty($nameerr) ||!empty($train_numbererr) ||!empty($ticket_priceerr) || !empty($ticket_priceerr)|| !empty($phoneerr)){
    header("location: add-trains.php?nameerr=$nameerr&train_numbererr=$train_numbererr&ticket_priceerr=$ticket_priceerr&cabin_numbererr=$cabin_numbererr");
    die;
}

$conect= new PDO('mysql:host=127.0.0.1;dbname=baithi;charset=utf8',"root","");
$stml=$conect->prepare($sql);
$stml->execute();
header('location: index.php');
?>