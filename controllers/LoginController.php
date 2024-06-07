<?php

use controller\HomeController;
use model\User;

require_once 'AuthController.php';
require_once 'HomeController.php';
require_once __DIR__ . '/../config/config.php';

$user = new User();
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $response = $user->authenticate($username, $password);

        if ($response) {
            session_start();
            $HomeController = new HomeController();
            $HomeController->index();
        }else{
            $error = 'Credenciais inválidas. Por favor, tente novamente.';
            
        }
    }