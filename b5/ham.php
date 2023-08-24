<?php
//explode chuyển thành 1 mảng
$arr="ph0003|nguyễn văn a|18";
$arr=explode("|",$str);
var_dump($arr);
//htmlentities chuyển chuỗi thành ptu html
$atr ="<a herf="google.com">something</a>";
echo $str;
echo htmlentities($str);
//implode chuyển mảng thành chuỗi
//lcfirst() chuyển ký tự đầu tiên của chuỗi => viết thường
//ltrim()xóa khoảng trắng ở bên trái của chuỗi
$srt="...........something";
echo ltrim($srt,",");
//md5():mã hóa chuỗi bằng thuật  toán md5
//sha1():mã hóa chuỗi thuật toán sha1 có 1 điểm chung là chuỗi cố định chỉ sinh ra 1 chuỗi.
//password_hash()
//password
//tạo ra biến
// kiểu dữ liệu int / float
// hàm  trong đó có đặc biệt gì
// các hàm built int 