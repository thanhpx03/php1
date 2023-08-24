<?php
$dataFile= fopen("data.txt", "r");
$arr=[];

while(!feof($dataFile)) {
$line = fgets($dataFile);
$lineArr = explode("|", $line);
$arr[] = $lineArr;
}
fclose($dataFile);
echo "<pre>";
var_dump($arr);
?>