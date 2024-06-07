<?php
namespace controller;

require_once 'BaseController.php';
require_once __DIR__ . '/../models/User.php';

use model\User;

class AuthController extends BaseController {
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $this->render('auth/login.php');
    }

    public function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = new User();
        $user = $user->authenticate($username, $password);
        if ($user) {
            $_SESSION['user'] = $user;
            header('Location: ' . BASE_URL . 'home');
        }
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }

    public function run() {
        // echo 'teste run';
    }
}
?>
