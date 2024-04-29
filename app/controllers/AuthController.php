<?php
// app/controllers/AuthController.php

require_once __DIR__ . '/../models/User.php';

class AuthController
{
    public function login()
    {
        // Verificar si ya hay una sesión activa
        if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
            // Si está autenticado, redirigir al home
            header('Location: index.php?action=home');
            exit;
        }

        $errorMessage = ""; // Inicializamos la variable $errorMessage

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (User::login($username, $password)) {
                // Iniciar sesión y redirigir a la página de inicio
                $_SESSION['user_id'] = $username; // Establecer la sesión del usuario
                header('Location: index.php?action=home');
                exit;
            } else {
                // Usuario o contraseña incorrectos
                $errorMessage = "Usuario o contraseña incorrectos";
            }
        }

        // Corregimos la ruta de inclusión de login.php
        include __DIR__ . '/../views/login.php';
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Cifrar la contraseña antes de almacenarla en la base de datos
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Guardar el usuario en la base de datos
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            $username = $conn->real_escape_string($username);
            $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
            $conn->query($query);
            $conn->close(); // Cerrar conexión

            // Redirigir al usuario después de registrar
            header('Location: index.php?action=home'); // Cambiado a home
            exit;
        }

        include __DIR__ . '/../views/register.php';
    }

    public function logout() {
        // Iniciar o reanudar la sesión
        session_start();
    
        // Destruir todas las variables de sesión
        $_SESSION = array();
    
        // Si se desea destruir la sesión, también se debe borrar la cookie de sesión
        // Nota: ¡Esto destruirá la sesión y no la información de la sesión!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
    
        // Finalmente, destruir la sesión
        session_destroy();
    
        // Redirigir al usuario al login
        header('Location: index.php?action=login');
        exit;
    }
}
