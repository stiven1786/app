<?php
// index.php

// Definir la ruta base del proyecto
define('BASE_PATH', realpath(__DIR__));
define('BASE_URL', 'http://localhost/app'); // Cambia esto por la URL base de tu aplicación

// Incluir el controlador de autenticación
require_once BASE_PATH . '/app/controllers/AuthController.php';


// Iniciar la sesión
session_start();

// Verificar si hay una sesión activa
if (!empty($_SESSION['user_id'])) {
    // Si hay una sesión activa y la acción es 'login', redirigir al home
    if (isset($_GET['action']) && $_GET['action'] === 'login') {
        header('Location: ' . BASE_URL . '/index.php?action=home');
        exit;
    }
}


// Ruta predeterminada
$action = isset($_GET['action']) ? $_GET['action'] : 'login';



// Crear una instancia del controlador de autenticación
$authController = new AuthController();

// Enrutamiento
switch ($action) {
    case 'login':
        $authController->login();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'home':
        include BASE_PATH . '/app/views/home.php'; // Aquí incluimos el archivo home.php
        break;
    default:
        // Si la acción no coincide con ninguna ruta definida, redirigir a la página de inicio de sesión
        header('Location: ' . BASE_URL . '/index.php?action=login');
        exit;
}
?>
