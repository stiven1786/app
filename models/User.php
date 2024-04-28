<?php
require_once __DIR__ . '/DB.php'; // Utilizando la ruta completa

class User {
    public static function login($username, $password) {
        $conn = DB::getConnection();

        $username = $conn->real_escape_string($username);

        $query = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($query);

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                // Contraseña válida
                $conn->close();
                return true;
            }
        }

        // Usuario o contraseña incorrectos
        $conn->close();
        return false;
    }

    public function createUser() {
        // Lógica para crear un nuevo usuario
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Validar los datos, por ejemplo, si los campos no están vacíos
            if (!empty($username) && !empty($password)) {
                // Cifrar la contraseña antes de almacenarla en la base de datos
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Guardar el usuario en la base de datos
                User::create($username, $hashed_password);

                // Redirigir al usuario después de registrar
                header('Location: index.php?action=home');
                exit;
            } else {
                echo "Por favor, complete todos los campos.";
            }
        }

        include 'views/create_user.php';
    }

    public function updateUser() {
        // Lógica para actualizar un usuario
        // Similar a la lógica de createUser()
    }

    public function deleteUser() {
        // Lógica para eliminar un usuario
        // Similar a la lógica de createUser()
    }
}
?>
