<?php

use controller\HomeController;
use model\User;

require_once 'AuthController.php';
require_once 'HomeController.php';
require_once __DIR__ . '/../config/config.php';

session_start(); 

$user = new User();

if (isset($_POST['username']) && isset($_POST['password'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($user->authenticate($username, $password)) {
        $_SESSION['user'] = $username; 
        $HomeController = new HomeController();
        $HomeController->index();
        exit;
    } else {
        $error_message = 'Usuário ou senha inválidos';
        header('Location: ' . BASE_URL . '../index.php?error=' . urlencode($error_message));
        exit; 
    }
}

header('Location: ' . BASE_URL . 'index.php');
exit;
