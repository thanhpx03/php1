<?php
    const DBNAME = "asm2";
    const DBUSER = "root";
    const DBPASS = "";
    const DBCHARSET = "utf8";
    const DBHOST = "127.0.0.1";

    const BASE_URL = "http://localhost/WE17314_PHP2/ASM2/";


    function route($name) {
        return BASE_URL . $name;
    }

    function redirect($key, $msg, $route) {
        $_SESSION[$key] = $msg;
        switch ($key) {
            case 'success':
                # code...
                unset($_SESSION['errors']);
                break;
            case 'errors':
                # code...
                unset($_SESSION['success']);
                break;

            default:
                # code...
                break;
        }
        header('location:'.BASE_URL.$route."?msg=".$key);
        die();
    }


    function delete_session() {
        unset($_SESSION['errors']);
        unset($_SESSION['success']);
    }
?>