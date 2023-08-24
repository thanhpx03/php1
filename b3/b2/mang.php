<?php
// mảng là kiểu dữ liệu giúp chứa các tập hợp giá trị
//(phần tử), mỗi phần tử trong mảng được xác định = tổ hợp 
//key => value 
//các phần tử trong mảng thì khong cần thiết phải 
// có cùng kiểu dữ liệu
$arr =[
    "name" => "Đăng Quang Minh",
    "age" => 32,
    "is_maried" => true,
    "childrens"=> ["Bún", "Boom"]
];

echo $arr["name"];
echo"<br>";
echo $arr["childrens"][1];
//cập nhật giá trị của phần tử

echo "<br>";
echo $arr["age"];
echo "<br>";
$arr["age"] =33;
echo $arr["age"];
echo "<br>";
echo "<pre>";
var_dump($arr);
//die;
$arr["wife"]="Lương Thu Trà";
var_dump($arr);
$arr["childrens"][] = "Bánh mì";
var_dump($arr);
unset($arr["childrens"][1]);
unset($arr["age"]);
var_dump($arr);

?>