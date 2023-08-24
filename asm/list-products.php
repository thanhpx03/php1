<?php
require_once "db.php";
$products=getAll();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        padding: 0;
        margin:0;
        box-sizing:border-box;
    }
    .contaiter{
        max-width: 780px;
        margin:30px auto;
    }
    table {
       
        border:0px solid gray;
        border-spacing:0px;
    }
    
    .a {
        color:black;
        background-color: aqua;


    }
    .b{
        background-color: aqua;
        color: black;
        
    }
    th,td{
        width: 200px;
        height: 10px;
        padding: 5px;
  text-align: center;
  border:0px solid gray:
    }

</style>
<body>
<div class="contaiter">
<table border="1">
    <thead class="a">
        <th>stt</th>
        <th>mssv</th>
        <th>tên</th>
        <th>tuổi</th>
        <th>giới tính</th>
        <th>lớp</th>
        <th> <a href="create-products.php">thêm</a></th>

    </thead>
    <tbody>
        <?php foreach($products as $item):?>
        <tr class="b">
            <td><?= $item[0] ?></td>
            <td><?= $item[1] ?></td>
            <td><?= $item[2] ?></td>
            <td><?= $item[3] ?></td>
            <td><?= $item[4] ?></td>
            <td><?= $item[5] ?></td>
            <td>
                <a href="edit-products.php?id=<?= $item[0] ?>">sửa</a>
                <a href="remove-products.php?id=<?= $item[0]?>">xóa</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>

    
</body>
</html>