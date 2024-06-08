<?php
namespace controller;

require_once 'BaseController.php';

class HomeController extends BaseController {
    public function index() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }else{
            header('Location: ' . BASE_URL . '../views/home/index.php');
        }
    }
    protected function vagas() {
        echo "vagas";
    }
}
?>
