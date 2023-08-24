<?php 
$soa=$_GET ["soa"];
$sob=$_GET ["sob"];
if($soa <0  ){
    echo "Lỗi rồi"."<br>";
    return 0;
}else if($sob<0){
    echo ("Lỗi rồi");
    return 0;
}
else if($soa > $sob){
    echo "Lỗi"."<br>";
}else {
    echo "OK"."<br>";
}
 $tong=0;
 for($i=$soa;$i<=$sob;$i++){
    $tong=$i+$tong;
 }
 echo "Tổng là : $tong"."<br>";
 $dem=0;
 for($i=$soa;$i<=$sob;$i++){
    if($i%2==0){
        $dem+=1;
    }
 }
 echo " các phần tử chẵn là : $dem"."<br>";
 for($i=$soa;$i<=$sob;$i++){
    if($i%2==0){
        echo " Các số chẵn là : $i"."<br>";
    }
 }
?>
