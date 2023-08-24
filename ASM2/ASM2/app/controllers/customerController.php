<?php
    namespace App\Controllers;
    use App\Models\BaseModel;
    use App\Models\Customer;

    class CustomerController extends BaseController {
        public $customer;

        public function __construct() {
            $this->customer = new Customer();
        }

        public function index() {
            $customers = $this->customer->getCustomers();
            return $this->render('customer.index', compact('customers'));
        }

        public function addCustomer() {
            return $this->render('customer.add');
        }

        public function postCustomer() {
            // delete_session();
            if(isset($_POST['btnAdd'])) {
                $error = [];
                if(empty($_POST['name'])) {
                    $error[] = 'Tên nhân viên không được để trống';
                }
                if(empty($_POST['address'])) {
                    $error[] = 'Địa chỉ nhân viên không được để trống';
                }
                if(empty($_POST['email'])) {
                    $error[] = 'Email nhân viên không được để trống';
                }
            }
            if(count($error) > 0) {
                // $_SESSION['errors'] = $error;
                // header('location:'.BASE_URL.'add_customer');
                // die();
                redirect('errors', $error, 'add_customer');
            } else {
                $result = $this->customer->addCustomer(NULL, $_POST['name'], $_POST['address'], $_POST['email']);
                if($result) {
                    // $_SESSION['success'] = 'Thêm nhân viên thành công';
                    // header('location:'.BASE_URL.'add_customer');
                    // die();
                    redirect('success', "Thêm nhân viên thành công", 'add_customer');
                }
            }
        }

        public function editCustomer($id) {
            $customers = $this->customer->getDetail($id);
            return $this->render('customer.edit', compact('customers'));
        }

        public function updateCustomer($id) {
            // delete_session();
            if(isset($_POST['btnUpdate'])) {
                $error = [];
                if(empty($_POST['name'])) {
                    $error[] = 'Tên nhân viên không được để trống';
                }
                if(empty($_POST['address'])) {
                    $error[] = 'Địa chỉ nhân viên không được để trống';
                }
                if(empty($_POST['email'])) {
                    $error[] = 'Email nhân viên không được để trống';
                }
            }
            if(count($error) > 0) {
                // $_SESSION['errors'] = $error;
                // header('location:'.BASE_URL.'add_customer');
                // die();
                redirect('errors', $error, 'edit_customer/'.$id);
            } else {
                $result = $this->customer->updateCustomer($id, $_POST['name'], $_POST['address'], $_POST['email']);
                if($result) {
                    // $_SESSION['success'] = 'Thêm nhân viên thành công';
                    // header('location:'.BASE_URL.'add_customer');
                    // die();
                    redirect('success', "Thêm nhân viên thành công", 'customer');
                }
            }
        }

        public function delete($id) {
            $this->customer->delete($id);
            $customers = $this->customer->getCustomers();
            return $this->render('customer.index', compact('customers'));
        }
    }
?>