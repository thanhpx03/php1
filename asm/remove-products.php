<?php
require_once 'db.php';
$id = $_GET['id'];
// tìm trong mảng dữ liệu gốc , xem dòng nào có id = $id
// thì xóa nó khỏi dữ liệu và gh lại 
$products = getAll();
$index = -1;
foreach($products  as $key => $value){
    if( $value [0] == $id){
        $index = $key;
        break;

    }
}
unset ($products[$index]);
saveFileByArr($products);
header('location: list-products.php');
?>