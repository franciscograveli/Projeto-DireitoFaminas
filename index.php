<?php

require_once 'config/config.php';
require_once 'controllers/BaseController.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/HomeController.php';
require_once 'models/User.php';


use controller\AuthController;

$app = new AuthController();

$app->run();
?>
