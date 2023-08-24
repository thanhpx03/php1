<?php
    namespace App\Controllers;
    use App\Models\BaseModel;
    use App\Models\Comment;

    class CommentController extends BaseController {
        public $comment;

        public function __construct() {
            $this->comment = new Comment();
        }

        public function index() {
            $comments = $this->comment->getComments();
            return $this->render('comment.index', compact('comments'));
        }

        public function addComment() {
            return $this->render('comment.add');
        }

        public function postComment() {
            // delete_session();
            if(isset($_POST['btnAdd'])) {
                $error = [];
                if(empty($_POST['name'])) {
                    $error[] = 'Tên người dùng không được để trống';
                }
                if(empty($_POST['content'])) {
                    $error[] = 'Nội dung không được để trống';
                }
            }
            if(count($error) > 0) {
                // $_SESSION['errors'] = $error;
                // header('location:'.BASE_URL.'add_customer');
                // die();
                redirect('errors', $error, 'add_comment');
            } else {
                $result = $this->comment->addComment(NULL, $_POST['name'], $_POST['content']);
                if($result) {
                    // $_SESSION['success'] = 'Thêm nhân viên thành công';
                    // header('location:'.BASE_URL.'add_customer');
                    // die();
                    redirect('success', "Thêm bình luận thành công", 'add_comment');
                }
            }
        }

        public function editComment($id) {
            $comments = $this->comment->getDetail($id);
            return $this->render('comment.edit', compact('comments'));
        }

        public function updateComment($id) {
            // delete_session();
            if(isset($_POST['btnUpdate'])) {
                $error = [];
                if(empty($_POST['name'])) {
                    $error[] = 'Tên người dùng không được để trống';
                }
                if(empty($_POST['content'])) {
                    $error[] = 'Nội dung không được để trống';
                }
            }
            if(count($error) > 0) {
                // $_SESSION['errors'] = $error;
                // header('location:'.BASE_URL.'add_customer');
                // die();
                redirect('errors', $error, 'edit_comment/'.$id);
            } else {
                $result = $this->comment->updateComment($id, $_POST['name'], $_POST['content']);
                if($result) {
                    // $_SESSION['success'] = 'Thêm nhân viên thành công';
                    // header('location:'.BASE_URL.'add_customer');
                    // die();
                    redirect('success', "Thêm bình luận thành công", 'comment');
                }
            }
        }

        public function deleteCM($id) {
            $this->comment->deleteComment($id);
            $comments = $this->comment->getComments();
            return $this->render('index.comment', compact('comments'));
        }
    }
?>