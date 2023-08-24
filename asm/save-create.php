<?php require_once 'db.php';
$id = $_GET['id'];
$mssv=$_GET['mssv'];
$name = $_GET['name'];
$age= $_GET['age'];
$gender=$_GET['gender'];
$class=$_GET['class'];
$products = getAll();
$maxId=-1;
foreach($products as $key => $value){
    if($maxId < $value[0]){
        $maxId= $value[0];
    }
}
$maxId++;
$products[]=[$maxId,$mssv,$name,$age,$gender,$class];
saveFileByArr($products);
header("location: list-products.php");
?>