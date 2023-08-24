<?php
const data_file="data2.txt";
// lấy toàn bộ dữ liệu của file data2.txt
function getAll(){
    $dataFile =fopen(data_file ,"r");
    $result = [];
    while(!feof($dataFile)){
        $line = fgets($dataFile);
        if(strlen(trim($line))== 0){
            continue;

        }
        $lineArr = explode("|" , $line);
        $result[]=$lineArr;
    
    }
        fclose($dataFile);
        return $result;
}

function saveFileByArr($arr){
   file_put_contents(data_file,"");
   foreach ($arr as $row){
    $line = implode ("|", $row);
    $line =trim($line). "\n";
    file_put_contents(data_file,$line, FILE_APPEND); 
   }
}
?>