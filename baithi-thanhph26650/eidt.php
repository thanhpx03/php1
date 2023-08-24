<?php
$id=$_GET['id'];
$sql="select * from passengers where id=$id";
$conect= new PDO('mysql:host=127.0.0.1;dbname=baithi;charset=utf8',"root","");
$stml=$conect->prepare($sql);
$stml->execute();
$data=$stml->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save-edit.php?id=<?=$data['id']?>" method="post" enctype="multipart/form-data">

    <div>
        name: <input type="text" name="name" value="<?=$data['name']?>">
    </div>
    <div>
    train_id: <input type="text" name="train_id" value="<?=$data['train_id']?>">
    </div>
    <div>
    avatar: <input type="file" name="avatar" value="<?=$data['avatar']?>">
    </div>

    <div>
    birth_date: <input type="date" name="birth_date" value="<?=$data['birth_date']?>">
    </div>
    <div>
    giới tính: <select name="gender" id="">
        <option <?php if($data['gender']=='nam'){?> selected="selected" <?php } ?> value="<?=$data['gender']?>">nam</option>
         <option <?php if($data['gender']=='nữ'){?> selected="selected" <?php } ?> value="<?=$data['gender']?>">nữ</option>
                   
        </select>
    </div>

    <div>
    phone: <input type="text" name="phone" value="<?=$data['phone']?>">
    </div>
    <div>
    created_at: <input type="text" name="created_at" value="<?=$data['created_at']?>">
    </div>
    <div>
    updated_at: <input type="text" name="updated_at" value="<?=$data['updated_at']?>">
    </div>
    <button type="submit">save</button>

    </form>
    
</body>
</html>