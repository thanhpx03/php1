<?php

// function tinh($a=1,$b=0){
//     return $a+$b;
// }
// echo tinh(3,6);

// function check_exited($arr,$value){
//     foreach( $arr as $item){
//         if($item== $value){
//             return true;
//         }

//     }
//     return false;
// }
$ariginalArr=[1,3,4,5,6,7,8,2];
// var_dump(check_exited($ariginalArr,10));
function covert_arr($arr){
    //chuyển toàn bộ giá trị của mảng thành số bình phương của nó 
    global $ariginalArr;
    for($i=0;$i<count($arr);$i++){
        $ariginalArr[$i]=$ariginalArr[$i]*$ariginalArr[$i];
    }
}
echo "<pre>";
var_dump($ariginalArr);
covert_arr();
var_dump($ariginalArr);