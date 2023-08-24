<?php
//Mảng là kiểu dư liệu giúp chưa tập hiwjp các gái trị
//Phần tử được xác định bằnng tổ hợp
//key= value
//Các phần tử trobf mảng ko nhâtds thiết phải có cùng kiểu dữ liệu

$arr=[
    "name" => " Phạm xuân thanh",
    "agr"=>29,
    "is_married"=>true,
    "children"=>[
        "bún",
        "bom"]
    ];
//Để tương tác với các phần tử trong mảng thf cần sử dụng
//TÊn biến +key của phần tử thgi cần sử dụng
//Tên biến+key phần tử muốn dùng
//Lấy giá trị của phần tử
echo $arr["name"];
echo "<br>";
//Lấy phần tử thứ 2 tên bom
echo $arr["children"][0];
echo "<br>";
//Cập nhập giá trị

echo $arr["age"]=9;
//
echo "<pre>";
var_dump($arr);
die;
$arr["wife"]="Lương thu trà";
var_dump($arr);
$arr["children"][]="Bánh mì";
var_dump($arr);
//xoád phần tử
unset($arr["children"][2]);
var_dump($arr);
    ?>