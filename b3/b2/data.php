<?php
// tạo mảng $students
//mảng này bao gồm các  mảng chứa thông tin của các 
//bạn sinh viên trong lớp bao gồm
//name , age ,gender , mảo(chuyên nghành)
// trong đó  nếu giới tính nam  -1 ,nữ -2 , khác -3
// major : tkw -1, lt mobile-2 ,ptpm - 3, tkdh-4
//tạo 3 sinh viên trong mảng students
//
$students =[
    [
    "roll_name" => "ph23451",
    "name" =>"Đặng Quang Minh",
    "age" =>"23",
    "gender" =>"1",
    "major" => "3",
],
    ["roll_name" => "ph26755",
    "name" =>"Trịnh văn Ninh",
    "age" =>"20",
    "gender" =>"1",
    "major" => "4",
],
    ["roll_name" => "ph26755",
    "name" =>"Đặng Quang Minh",
    "age" =>"23",
    "gender" =>"1",
    "major" => "1",
]

];
echo "<pre>";
for($i=0;$i<count($students);$i++){
    var_dump($students[$i]["roll_name"]);

}
?>
<table border="1">
    <?phpfor($i=0;$i<count($students);$i++){ ?>
        <tr>
            <td><?php echo $students[$i]["roll_name"] ?></td>
        </tr>
        <?php } ?>
</table>