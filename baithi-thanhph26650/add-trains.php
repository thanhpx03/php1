<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save-add-trains.php" method="post">


    <div>
        name: <input type="text" name="name">
        <?php if(isset($_GET['nameerr'])):?>
                <span style="color: red"><?= $_GET['nameerr']?></span>
            <?php endif ?>
    </div>
    <div>
    train_number: <input type="text" name="train_number">
    <?php if(isset($_GET['train_numbererr'])):?>
                <span style="color: red"><?= $_GET['train_numbererr']?></span>
            <?php endif ?>
    </div>
    <div>
    ticket_price: <input type="text" name="ticket_price">
    <?php if(isset($_GET['ticket_priceerr'])):?>
                <span style="color: red"><?= $_GET['ticket_priceerr']?></span>
            <?php endif ?>
    </div>
    <div>
    cabin_number: <input type="text" name="cabin_number">
    <?php if(isset($_GET['cabin_numbererr'])):?>
                <span style="color: red"><?= $_GET['cabin_numbererr']?></span>
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