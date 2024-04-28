// index.php

<?php
// Cargar la configuración
require_once 'config.php';

// Cargar los controladores
require_once 'controllers/AuthController.php';
require_once 'controllers/HomeController.php';

// Determinar la acción solicitada
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

// Enrutamiento basado en la acción
switch ($action) {
    case 'login':
        $authController = new AuthController();
        $authController->login();
        break;
    case 'register':
        $authController = new AuthController();
        $authController->register();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    case 'home':
        $homeController = new HomeController();
        $homeController->index();
        break;
    case 'show_users': // Aquí se debe manejar la acción show_users
        $homeController = new HomeController();
        $homeController->showUsers();
        break;
    default:
        // Redirigir a la página de inicio de sesión por defecto
        header('Location: index.php?action=login');
        exit;
}
?>

