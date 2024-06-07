<?php
define('SECRET_KEY', 'your_secret_key_here');

$base_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);
define('BASE_URL', rtrim($base_url, '/\\') . '/');
?>
