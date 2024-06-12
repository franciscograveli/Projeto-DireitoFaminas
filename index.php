<?php
require_once 'config/config.php';
require_once 'controllers/BaseController.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/HomeController.php';
require_once 'models/User.php';


use controller\AuthController;

$app = new AuthController();

if(isset($_GET['error'])) {
    echo '<div class="error-message">' . $_GET['error'] . '</div>';
}
if(isset($_GET['success'])) {
    echo '<div class="success-message">' . $_GET['success'] . '</div>';
}

$app->run();


?>
