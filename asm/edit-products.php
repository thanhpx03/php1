<?php
require_once 'db.php';
$products = getAll();
$id = $_GET['id'];
$item = [];
foreach($products as $value){
    if($value[0] == $id){
        $item = $value;
        break;
    }
}
// var_dump($item);die;
?>
<form action="save-edit.php">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div>
        mssv: <input type="text" name="mssv" value="<?= trim($item[1]) ?>">
    </div>
    <br>
    <div>
        name: <input type="text" name="name" value="<?= trim($item[2]) ?>">
    </div>
    <br>
    <div>
        tuổi: <input type="text" name="age" value="<?= trim($item[3]) ?>">
    </div>
    <br>
    <div>
        giới tính: <select name="gender" id="">
        <option <?php if($item[4]=='nam'){?> selected="selected" <?php } ?> value="nam">nam</option>
         <option <?php if($item[4]=='nữ'){?> selected="selected" <?php } ?> value="nữ">nữ</option>
                   
        </select>
        
    </div>
    <br>
    <div>
        lớp: <input type="text" name="class" value="<?= trim($item[5]) ?>">
    </div>
    <button type="submit">Save</button>
</form>
