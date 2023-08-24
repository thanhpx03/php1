<?php
$id=$_GET['id'];
$sql="select * from trains where id=$id";
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
    <form action="save-edit-trains.php?id=<?=$data['id']?>" method="post">

    <div>
        name: <input type="text" name="name" value="<?=$data['name']?>">
    </div>
    <div>
    train_number: <input type="text" name="train_number" value="<?=$data['train_number']?>">
    </div>
    <div>
    ticket_price: <input type="text" name="ticket_price" value="<?=$data['ticket_price']?>">
    </div>

    <div>
    cabin_number: <input type="text" name="cabin_number" value="<?=$data['cabin_number']?>">
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