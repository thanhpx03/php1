<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save-add.php" method="post" enctype="multipart/form-data">


    <div>
        name: <input type="text" name="name">
        <?php if(isset($_GET['nameerr'])):?>
                <span style="color: red"><?= $_GET['nameerr']?></span>
            <?php endif ?>
    </div>
    <div>
    train_id: <input type="text" name="train_id">
    <?php if(isset($_GET['train_iderr'])):?>
                <span style="color: red"><?= $_GET['train_iderr']?></span>
            <?php endif ?>
    </div>
    <div>
    avatar: <input type="file" name="avatar">
    </div>
    <div>
    birth_date: <input type="date" name="birth_date">
    <?php if(isset($_GET['birth_dateerr'])):?>
                <span style="color: red"><?= $_GET['birth_dateerr']?></span>
            <?php endif ?>
    </div>
    <div>
    gender: <input type="text" name="gender">
    <?php if(isset($_GET['gendererr'])):?>
                <span style="color: red"><?= $_GET['gendererr']?></span>
            <?php endif ?>
    </div>
    <div>
    phone: <input type="text" name="phone">
    <?php if(isset($_GET['phoneerr'])):?>
                <span style="color: red"><?= $_GET['phoneerr']?></span>
            <?php endif ?>
    </div>
    <div>
    created_at: <input type="text" name="created_at">
    </div>
    <div>
    updated_at: <input type="text" name="updated_at">
    </div>
    <button type="submit">save</button>

    </form>
    
</body>
</html>