// HomeController.php

<?php
class HomeController {
    public function index()
    {
        // Incluir la vista de home
        include 'views/home.php';
    }

    public function showUsers()
    {
        // Redirigir a la página de usuarios
        header('Location: index.php?action=users');
        exit;
    }
}
?>
