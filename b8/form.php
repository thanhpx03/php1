<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="submit.php" method="get">
        <label for="" name="name">ho va tên</label>
        <input type="text" name="name">
        <br>
        <label for="">sở thích</label>
        <fieldset>
            <input type="checkbox" name="sothich[]" value="1">bóng đá
            <br>
            <input type="checkbox" name="sothich[]" value="2">du lịch
            <br>
            <input type="checkbox" name="sothich[]" value="3">xem phim
            <br>
            <input type="checkbox" name="sothich[]" value="4">ăn uống

        </fieldset>
        <select name="country[]" id="" multiple>
        <option value="01">việt nam</option>
        <option value="02">trung quốc</option>

        <option value="03">lào</option>

        <option value="04">thái lan</option>

        </select>
        <button type="submit">lưu</button>
    </form>
</body>
</html>