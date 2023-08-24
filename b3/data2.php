<?php
// mảng key là số

//$a=[1,2,3,4,5,6,8,9,0];
// mảng key là chữ
$b=["name"=> "phạm xuân thanh",
"age"=>18,
"childrens"=>[
"Fpt", "ph26650"]
];
//lưu ý:với mảng có chứa phần tử key là dạng chữ thì không sử  dụng vòng lặp for ra mảng
//cần sử dụng foreach
// for($i=0;$i<count($a);$i++){
//     echo $a[$i];
// }
// for($i=0;$i<count($b);$i++){
//     echo $a[$i];
// }
//var_dump($b["name"]);
//thêm 1 pt cuối mảng
$a []=100;
$b ['address']="thanh";
//sửa pt mảng
$b ["age"]=19;
//xóa 1 pt
unset($b ['childrens']);

// từ khóa foreach
//$b : tên mảng
// $key:giá trị của key của phần tử
// $ value: giá trị tương ứng của phần tử
foreach($b as $key => $value){
    var_dump($key);
    var_dump($value);
    echo"<br>";

}
?>