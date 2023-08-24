<?php 
session_start();
if(!isset($_SESSION['auth'])|| empty($_SESSION['auth'])){
    header('location:login.php');
    die;
}
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
    <form action="save-add.php"  method="post" enctype="multipart/form-data">
        <div>
            Name: <input type="text" name="name" id="">
            <?php if(isset($_GET['nameerr'])):?>
                <span style="color: red"><?= $_GET['nameerr']?></span>
            <?php endif ?>
        </div>
        <div>
            Sku: <input type="text" name="sku" id="">
            <?php if(isset($_GET['skuerr'])):?>
                <span style="color: red"><?= $_GET['skuerr']?></span>
            <?php endif ?>
        </div>
        <div>
            img: <input type="file" name="img" id="">
            
        </div>
        <div>
            price: <input type="number" name="price" id="">
            <?php if(isset($_GET['priceerr'])):?>
                <span style="color: red"><?= $_GET['priceerr']?></span>
            <?php endif ?>
        </div>
        <div>
            quantily: <input type="number" name="quantily">
            <?php if(isset($_GET['quantilyerr'])):?>
                <span style="color: red"><?= $_GET['quantilyerr']?></span>
            <?php endif ?>
        </div>
        <div>
            category_id : <input type="text" name="cetegory_id">
            <?php if(isset($_GET['cetegory_iderr'])):?>
                <span style="color: red"><?= $_GET['cetegory_iderr']?></span>
            <?php endif ?>
        </div>
        <div>
            detail: <input type="text" name="detail">
            <?php if(isset($_GET['detailerr'])):?>
                <span style="color: red"><?= $_GET['detailerr']?></span>
            <?php endif ?>
        </div>
        
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
</body>
</html>