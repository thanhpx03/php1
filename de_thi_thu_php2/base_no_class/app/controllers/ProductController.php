<?php
namespace App\controllers;
use App\models\Product;
use App\models\BaseModel;
// include_once 'app/models/Product.php';
// include_once 'app/controllers/BaseController.php';
// function getProduct() {
//     $products = getListProduct();
//     return render('product.index',compact('products'));
// }
class ProductController extends BaseController{
    public $product;
    public function __construct(){
        $this->product=new Product();
    }
    public function index(){
        // echo '123';
        // die();
        $product=$this->product->getListProduct();
        return $this->render('product.index',compact('product'));
    }
    // public function list(){
    //     echo "đây là product";
    // }
}