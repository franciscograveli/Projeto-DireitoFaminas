<?php
namespace controller;

class BaseController {
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
    protected function render($view, $data = []) {
        $viewFile = __DIR__ . "/../views/$view";
        if (file_exists($viewFile)) {
            extract($data);
            require $viewFile;
        } else {
            die("Error: View '$view' not found.");
        }
    }

    protected function vagas() {
        echo "vagas";
    }
}
?>
