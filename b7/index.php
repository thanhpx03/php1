<?php
// 1 tạo câu sql lấy dữ liệu từ db
$sqlQuery="select * from users";
// 2 tạo kết nối từ php => mysql
$connect= new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8","root","");
//nạp câu sql vao kết nối
$stmt=$connect->prepare($sqlQuery);
//3.2 thực thi câu sql với db
$stmt->execute();

//4 nhận dữ liệu trả về từ câu sql
$data=$stmt->fetchAll();//lấy về dữ liệu tất cả các bản ghi tìm được từ câu 
//$data = $stml=> fetch();-lấy ra 1 bản ghi đầu tiên tìm được từ câu sql

// echo "<pre>";
// var_dump ($data);
?>
<table border="1">
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>avatar</th>
    <th>password</th>
    <th>
        <a href="add-form.php">ADD</a>
    </th>
    <tbody>
        <?php foreach($data as $u):?>
            <tr>
            <td>
                    <?= $u['id']?>
                </td>
                <td>
                    <?= $u['name']?>
                </td>
                <td>
                    <?= $u['email']?>
                </td>
                <td>
                    <?= $u['avatar']?>
                </td>
                <td>
                    <?= $u['password']?>
                </td>
                <td>
                    <a href="remove.php?id=<?=$u['id']?>">xóa</a>
                    <a href="edit.php?id=<?=$u['id']?>">sửa</a>

                </td>
            </tr>
            <?php endforeach?>
    </tbody>

</table>