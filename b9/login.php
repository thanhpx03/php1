<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post-login.php" method="post">
        <div>
            email: <input type="text" name="email">
            <?php if(isset($_GET['emailerr'])):?>
                <span style="color: red"><?= $_GET['emailerr']?></span>
                <?php endif?>
        </div>
        <div>
            password: <input type="password" name="passwords">
            <?php if(isset($_GET['passworderr'])):?>
                <span style="color: red"><?= $_GET['passworderr']?></span>
                <?php endif?>
        </div>
        <button type="submit">đăng nhập </button>
    </form>
    
</body>
</html>