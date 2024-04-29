<?php
// app/models/User.php

// Incluir el archivo de conexión a la base de datos
require_once __DIR__ . '/../../config/database.php';

class User {
    public static function login($username, $password) {
        $conn = DB::getConnection(); // Obtener la conexión a la base de datos

        // Preparar y ejecutar la consulta para buscar al usuario por su nombre de usuario
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();

        // Obtener el resultado de la consulta
        $result = $stmt->get_result();

        // Obtener el usuario encontrado
        $user = $result->fetch_assoc();

        // Verificar si se encontró un usuario con ese nombre de usuario
        if ($user) {
            // Verificar si la contraseña proporcionada coincide con la contraseña almacenada en la base de datos
            if (password_verify($password, $user['password'])) {
                // La contraseña es correcta, inicio de sesión exitoso
                return true;
            }
        }

        // Usuario o contraseña incorrectos
        return false;
    }
}
?>
