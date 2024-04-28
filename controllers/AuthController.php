<?php
require_once 'models/User.php';

class AuthController {
    public function login() {
        $errorMessage = ""; // Inicializamos la variable $errorMessage

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (User::login($username, $password)) {
                // Iniciar sesión y redirigir a la página de inicio
                header('Location: index.php?action=home');
                exit;
            } else {
                // Usuario o contraseña incorrectos
                $errorMessage = "Usuario o contraseña incorrectos";
            }
        }

        include 'views/login.php';
    }

    public function register() {
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
    
        include 'views/register.php';
    }
    
    public function logout() {
        // Iniciamos o reanudamos la sesión
        session_start();
    
        // Destruir todas las variables de sesión
        $_SESSION = array();
    
        // Destruir la sesión
        session_destroy();
    
        // Redirigir al usuario a alguna parte después del cierre de sesión
        header('Location: index.php?action=login');
        exit;
    }
}
?>
