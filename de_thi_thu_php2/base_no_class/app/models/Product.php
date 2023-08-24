<?php
namespace App\models;
class Product extends BaseModel{
    public $table='products';
    public function getListProduct(){
        $sql="select *from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // public function list_model(){
    //     echo "đây là model";
    // }
}
// require_once 'app/models/BaseModel.php';
// function getListProduct() {
//     $sql = "select * from product";
//     return loadAllRows([],$sql);
// }
?>