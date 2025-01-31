<?php
class BaseController {
    protected function render($view, $data = []) {
        extract($data);
        require_once 'views/layout
        require_once 'views/layouts/header.php';
        require_once "views/{$view}.php";
        require_once 'views/layouts/footer.php';
    }
}
?>
