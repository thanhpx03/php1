<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function(){
    return "trang chủ";
});

$router->get('product', [App\Controllers\ProductController::class, 'index']);
$router->get('customer', [App\Controllers\CustomerController::class, 'index']);
$router->get('category', [App\Controllers\CategoryController::class, 'index']);
$router->get('user', [App\Controllers\UserController::class, 'index']);
$router->get('comment', [App\Controllers\CommentController::class, 'index']);
// tạo route product
$router->get('add_product',[App\Controllers\ProductController::class, 'addProduct']);
$router->post('post_product', [App\Controllers\ProductController::class, 'postProduct']);

$router->get('edit_product/{id}',[App\Controllers\ProductController::class, 'editProduct']);
$router->post('update_product/{id}', [App\Controllers\ProductController::class, 'updateProduct']);

$router->get('delete_product/{id}',[App\Controllers\ProductController::class, 'deleteProduct']);

//Tao route add customer
$router->get('add_customer',[App\Controllers\CustomerController::class, 'addCustomer']);
$router->post('post_customer', [App\Controllers\CustomerController::class, 'postCustomer']);

$router->get('edit_customer/{id}',[App\Controllers\CustomerController::class, 'editCustomer']);
$router->post('update_customer/{id}', [App\Controllers\CustomerController::class, 'updateCustomer']);

$router->get('delete_customer/{id}',[App\Controllers\CustomerController::class, 'delete']);


//Tao route add category
$router->get('add_category',[App\Controllers\CategoryController::class, 'addCategory']);
$router->post('post_category', [App\Controllers\CategoryController::class, 'postCategory']);

$router->get('edit_category/{id}',[App\Controllers\CategoryController::class, 'editCategory']);
$router->post('update_category/{id}', [App\Controllers\CategoryController::class, 'updateCategory']);

$router->get('delete_category/{id}',[App\Controllers\CategoryController::class, 'deleteCT']);



//Tao route add user
$router->get('add_user',[App\Controllers\UserController::class, 'addUser']);
$router->post('post_user', [App\Controllers\UserController::class, 'postUser']);

$router->get('edit_user/{id}',[App\Controllers\UserController::class, 'editUser']);
$router->post('update_user/{id}', [App\Controllers\UserController::class, 'updateUser']);

$router->get('delete_user/{id}',[App\Controllers\UserController::class, 'delete']);


//Tao route comment
$router->get('add_comment',[App\Controllers\CommentController::class, 'addComment']);
$router->post('post_comment', [App\Controllers\CommentController::class, 'postComment']);

$router->get('edit_comment/{id}',[App\Controllers\CommentController::class, 'editComment']);
$router->post('update_comment/{id}', [App\Controllers\CommentController::class, 'updateComment']);

$router->get('delete_comment/{id}',[App\Controllers\CommentController::class, 'deleteCM']);



# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>