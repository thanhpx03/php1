<?php
    namespace App\Controllers;
    use App\Models\BaseModel;
    use App\Models\Category;

    class CategoryController extends BaseController {
        public $category;

        public function __construct() {
            $this->category = new Category();
        }

        public function index() {
            $categories = $this->category->getCategories();
            return $this->render('category.index', compact('categories'));
        }

        public function addCategory() {
            return $this->render('category.add');
        }

        public function postCategory() {
            // delete_session();
            if(isset($_POST['btnAdd'])) {
                $error = [];
                if(empty($_POST['name'])) {
                    $error[] = 'Tên loại hàng không được để trống';
                }
                if(empty($_POST['amount'])) {
                    $error[] = 'Số lượng không được để trống';
                }
            }
            if(count($error) > 0) {
                // $_SESSION['errors'] = $error;
                // header('location:'.BASE_URL.'add_category');
                // die();
                redirect('errors', $error, 'add_category');
            } else {
                $result = $this->category->addCategory(NULL, $_POST['name'], $_POST['amount']);
                if($result) {
                // $_SESSION['success'] = 'Thêm loại hàng thành công';
                // header('location:'.BASE_URL.'add_category');
                // die();
                redirect('success', 'Thêm loại hàng thành công', 'add_category');
                }
            }
        }

        public function editCategory($id) {
            $categories = $this->category->getDetail($id);
            return $this->render('category.edit', compact('categories'));
        }

        public function updateCategory($id) {
            if(isset($_POST['btnUpdate'])) {
                $error = [];
                if (empty($_POST['name'])) {
                    # code...
                    $error[] = "Tên loại hàng không được để trống";
                }
                if (empty($_POST['amount'])) {
                    # code...
                    $error[] = "Số lượng loại hàng không được để trống";
                }
                if(count($error) > 0) {
                    redirect('errors', $error, 'edit_category/'.$id);
                } else {
                    $result = $this->category->updateCategory($id, $_POST['name'], $_POST['amount']);
                    if ($result) {
                        # code...
                        redirect('success', "Sửa loại hàng thành công", 'category');
                    }
                }
            }

        }

        public function deleteCT($id) {
            $this->category->delete($id);
            $categories = $this->category->getCategories();
            return $this->render('category.index', compact('categories'));
        }
    }
?>