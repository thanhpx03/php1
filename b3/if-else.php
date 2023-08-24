<?php
//$a =[1, 3, 5, 6, 7, 10, 17, 21, 12, 9, 4];
// đếm số chia hết cho 3
//hiển thị giá trị nhỏ nhất và giá trị lớn nhất trong mảng
// $dem=0;
// $min=$a[0];
// $max=$a[0];
// for($i=0;$i<count($a);$i++){
//     if($i%3==0){
//         $dem+=1;
//     } else if($a[$i]< $min){
//         $min= $a[$i];
//     }else if($a[$i]> $max){
//         $max=$a[$i];

//     }
// }
// echo " các phần tử chia hết cho 3 là : $dem"."<br>";
// echo "min là : ".$min . "<br>";
// echo "max là : ".$max . "<br>";

$name = $_GET['name'];
$year=$_GET["year"];
$gender=$_GET['gender'];
$age = 2022 - $year;
//nếu giói tính = nam và tuổi >= 18 tuổi đủ điều kiện kết hôn
if($gender == 1 && $age  >=18){
    echo "đã đủ điều kiện kết hôn"; 
}elseif($gender==2 && $age>=16){
    echo "đã đủ điều kiện kết hôn"; 
    
}
else{
echo "k đủ điều kiện";}