<?php
$id = $_GET['id'];
$name = $_GET['name'];
$price = $_GET['price'];

$lineString = "\n$id|$name|$price";
// var_dump($lineString);
$dataFile = fopen("data2.txt", "a");
fwrite($dataFile, $lineString);
fclose($dataFile);
echo "Done!";
?>