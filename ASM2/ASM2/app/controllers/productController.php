<?php
    namespace App\Controllers;
    use App\Models\BaseModel;
    use App\Models\Product;

    class ProductController extends BaseController {
        public $product;

        public function __construct() {
            $this->product = new Product();
        }

        public function index() {
            $products = $this->product->getProducts();
            return $this->render('product.index', compact('products'));
        }

        public function addProduct() {
            return $this->render('product.add');
        }

        public function postProduct() {
            // delete_session();
            if(isset($_POST['btnAdd'])) {
                $error = [];
                if(empty($_POST['name'])) {
                    $error[] = "Tên sản phẩm không được để trống";
                }
                if(empty($_POST['price'])) {
                    $error[] = "Giá sản phẩm không được để trống";
                }
            }
            if(count($error) > 0) {
                // $_SESSION['errors'] = $error;
                // header('location:'.BASE_URL.'add_product');
                // die();
                redirect('errors', $error, 'add_product');
            }else {
                $result = $this->product->addProduct(NULL, $_POST['name'], $_POST['price']);
                if($result) {
                    // $_SESSION['success'] = "Thêm sản phẩm thành công";
                    // header('location:'.BASE_URL.'add_product');
                    // die();
                redirect('success', "Thêm sản phẩm thành công", 'add_product');
                }
            }
        }

        public function editProduct($id) {
            $products = $this->product->getDetail($id);
            return $this->render('product.edit', compact('products'));
        }

        public function updateProduct($id) {
            if(isset($_POST['btnUpdate'])) {
                $error = [];
                if(empty($_POST['name'])) {
                    $error[] = "Tên sản phẩm không được để trống";
                }
                if(empty($_POST['price'])) {
                    $error[] = "Giá sản phẩm không được để trống";
                }
            }
            if(count($error) > 0) {
                // $_SESSION['errors'] = $error;
                // header('location:'.BASE_URL.'add_product');
                // die();
                redirect('errors', $error, 'edit_product/'.$id);
            }else {
                $result = $this->product->updateProduct($id,$_POST['name'], $_POST['price']);
                if($result) {
                    // $_SESSION['success'] = "Thêm sản phẩm thành công";
                    // header('location:'.BASE_URL.'add_product');
                    // die();
                redirect('success', "Thêm sản phẩm thành công", 'product');
                }
            }
        }

        public function deleteProduct($id) {
            $this->product->deleteProduct($id);
            $products = $this->product->getProducts();
            return $this->render('product.index', compact('products'));
        }
    }
?>