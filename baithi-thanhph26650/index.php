<?php
$conect= new PDO('mysql:host=127.0.0.1;dbname=baithi;charset=utf8',"root","");
$sql="select *from passengers";
$stml=$conect->prepare($sql);
$stml->execute();
$data=$stml->fetchAll();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>id</th>
            <th>name</th>

            <th>train_id</th>


            <th>avatar</th>

            <th>birth_date</th>


            <th>gender</th>
            <th>phone</th>
            <th>created_at</th>
            <th>updated_at</th>

<th>
    <a href="add.php">add</a>
</th>




        </thead>

        <?php foreach($data as $u):?>
            <tr>
                <td><?=$u['id']?></td>
                <td><?=$u['name']?></td>

                <td><?=$u['train_id']?></td>

                <td><img src="<?=$u['avatar']?>" alt="" width="50"></td>

                <td><?=$u['birth_date']?></td>


                <td><?=$u['gender']?></td>

                <td><?=$u['phone']?></td>

                <td><?=$u['created_at']?></td>
                <td><?=$u['updated_at']?></td>
                <td>
                    <a href="delete.php?id=<?=$u['id']?>">xoa</a>
                    <a href="eidt.php?id=<?=$u['id']?>">sua</a>
                </td>


            </tr>
            <?php endforeach ?>
    </table>
    
</body>
</html>
<?php
$conect= new PDO('mysql:host=127.0.0.1;dbname=baithi;charset=utf8',"root","");
$sql="select *from trains";
$stml=$conect->prepare($sql);
$stml->execute();
$data=$stml->fetchAll();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>id</th>
            <th>name</th>

            <th>train_number</th>


            <th>ticket_price</th>

            <th>cabin_number</th>


           
            <th>created_at</th>
            <th>updated_at</th>

<th>
    <a href="add-trains.php">add</a>
</th>




        </thead>

        <?php foreach($data as $u):?>
            <tr>
                <td><?=$u['id']?></td>
                <td><?=$u['name']?></td>

                <td><?=$u['train_number']?></td>

                <td><?=$u['ticket_price']?></td>

                <td><?=$u['cabin_number']?></td>

                <td><?=$u['created_at']?></td>
                <td><?=$u['updated_at']?></td>
                <td>
                    <a href="delete-trains.php?id=<?=$u['id']?>">xoa</a>
                    <a href="eidt-trains.php?id=<?=$u['id']?>">sua</a>
                </td>


            </tr>
            <?php endforeach ?>
    </table>
    
</body>
</html>