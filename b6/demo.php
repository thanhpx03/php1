<?php
//time
// strtotime => chuyển đổi 1 chuỗi (có fonat năm - tháng - ngày )
// nhận thời gian

$str=strtotime("2003-07-15 10:51:09 + 18days");
//nếu muốn chuyển định dạng người đăng nhập tuef form sang định dạng lưu
// thì sử dụng đoạn code đây
//$ymd=Datetime: :createf romformat ('d/m/y' , '15/07/2003')-> format('y-m-d');
//date
// ts1: format muốn hiển thị (tham khảo  :https:www.php.net/manual/en/date)
//ts2: nhận thời gian 
$d = date('d/m/Y h:i:s',$str);
echo $d;
?>