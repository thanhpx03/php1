<?php
//Tạo mảng $student
//Mảng gồm các mảng chứ thoong tin của các bạn sih viên bao gồm:
//mssv,Name,age,gioitinh,chuyên ngành.
//Trong đó nếu giới tính nam-1,Nữ-2, Khác -3;
//Chuyên ngành: TKW-1; Mobile-2; ptp-3;Tkdh-4;
//Tạo 3 sinh viện trong mảng student

$student=[
   [
    "mssv"=>"ph26869",
    "name"=>"thanh",
    "tuoi"=>"19",
    "gt"=>1,
    "chuyennganh"=>1
   ],
   [
    "mssv"=>"ph2333",
    "name"=>"linh",
    "tuoi"=>"18",
    "gt"=>2,
    "chuyennganh"=>3
   ],
   [
    "mssv"=>"ph11119",
    "name"=>"thuy",
    "tuoi"=>"29",
    "gt"=>3,
    "chuyennganh"=>2
   ],
];
echo count($student);
echo "<br>";
echo "<pre>";
for($i=0;$i<count($student);$i++){
    var_dump($student[$i]["mssv"]);
}
//
?>
<table border="1">
    <?php for($i=0;$i<count($student);$i++){ ?>
        <tr>
        <td><?php echo $student[$i] ["mssv"]?></td>
        <td><?php echo $student[$i] ["name"]?></td>
        <td><?php echo $student[$i] ["tuoi"]?></td>
        <td><?php echo $student[$i] ["gt"]?></td>

        <td><?php echo $student[$i] ["chuyennganh"]?></td>

        </tr>
 <?php } ?>
    
</table>
