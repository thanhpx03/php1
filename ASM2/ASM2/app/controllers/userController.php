<?php
    namespace App\Controllers;
    use App\Models\BaseModel;
    use App\Models\User;

    class UserController extends BaseController {
        public $user;

        public function __construct() {
            $this->user = new User();
        }

        public function index() {
            $users = $this->user->getUsers();
            return $this->render('user.index', compact('users'));
        }

        public function addUser() {
            return $this->render('user.add');
        }

        public function postUser() {
            // delete_session();
            if(isset($_POST['btnAdd'])) {
                $error = [];
                if(empty($_POST['name'])) {
                    $error[] = "Tên tài khoản không được để trống";
                }
                if(empty($_POST['password'])) {
                    $error[] = "Mật khẩu không được để trống";
                }
                if(empty($_POST['address'])) {
                    $error[] = "Địa chỉ không được để trống";
                }
                if(empty($_POST['phone'])) {
                    $error[] = "Số điện thoại không được để trống";
                }
            }
            if(count($error) > 0) {
                // $_SESSION['errors'] = $error;
                // header('location:'.BASE_URL.'add_product');
                // die();
                redirect('errors', $error, 'add_user');
            }else {
                $result = $this->user->addUser(NULL, $_POST['name'], $_POST['password'], $_POST['address'], $_POST['phone']);
                if($result) {
                    // $_SESSION['success'] = "Thêm sản phẩm thành công";
                    // header('location:'.BASE_URL.'add_product');
                    // die();
                redirect('success', "Thêm sản phẩm thành công", 'add_user');
                }
            }
        }

        public function editUser($id) {
            $users = $this->user->getDetail($id);
            return $this->render('user.edit', compact('users'));
        }

        public function updateUser($id) {
            // delete_session();
            if(isset($_POST['btnUpdate'])) {
                $error = [];
                if(empty($_POST['name'])) {
                    $error[] = "Tên tài khoản không được để trống";
                }
                if(empty($_POST['password'])) {
                    $error[] = "Mật khẩu không được để trống";
                }
                if(empty($_POST['address'])) {
                    $error[] = "Địa chỉ không được để trống";
                }
                if(empty($_POST['phone'])) {
                    $error[] = "Số điện thoại không được để trống";
                }
            }
            if(count($error) > 0) {
                // $_SESSION['errors'] = $error;
                // header('location:'.BASE_URL.'add_product');
                // die();
                redirect('errors', $error, 'edit_user/'.$id);
            }else {
                $result = $this->user->updateUser($id, $_POST['name'], $_POST['password'], $_POST['address'], $_POST['phone']);
                if($result) {
                    // $_SESSION['success'] = "Thêm sản phẩm thành công";
                    // header('location:'.BASE_URL.'add_product');
                    // die();
                redirect('success', "Thêm sản phẩm thành công", 'user');
                }
            }
        }

        public function delete($id) {
            $this->user->delete($id);
            $users = $this->user->getUsers();
            return $this->render('user.index', compact('users'));
        }
    }
?>