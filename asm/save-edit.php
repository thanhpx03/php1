<?php
require_once 'db.php';
$id = $_GET['id'];
$mssv=$_GET['mssv'];
$name = $_GET['name'];
$age= $_GET['age'];
$gender=$_GET['gender'];
$class=$_GET['class'];
$products= getAll();
$index=-1;
foreach($products as $key => $value){
    if($value[0]==$id){
        $index = $key;
        break;
    }
}
$products[$index][1]=$mssv;
$products[$index][2]=$name;
$products[$index][3]=$age;
$products[$index][4]=$gender;
$products[$index][5]=$class;

saveFileByArr($products);
header("location: list-products.php");
?>