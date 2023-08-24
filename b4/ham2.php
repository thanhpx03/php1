<?php
// var_dump(1,2,3"hello",true);

// function to_upper_srt(){
//     $arrTs= func_get_args();
//     $arrResult=[];
//     foreach($arrTs as $key => $value){
//         //chuyển chữ in thường ra chữ in hoa
//         $arrResult[]=mb_strtoupper($value);
//     }
//    // var_dump($arrTs);
//    return $arrResult;
// }
// $arr=to_upper_srt("hello",1,2,"lan");
// var_dump ($arr);


$arr=["thien","poly","th"];
$arr2= array_map(function ($item){
    return mb_strtoupper($item);

},$arr);
var_dump($arr2);
?>