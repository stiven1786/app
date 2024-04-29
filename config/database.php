<?php
class DB {
    public static function getConnection() {
        // Configuración de la base de datos
        define('DB_HOST', '66.225.201.214');
        define('DB_USER', 'nbkbkizx_consumos');
        define('DB_PASS', '1v44Qmx5rM');
        define('DB_NAME', 'nbkbkizx_cartera-sandor');

        // Crear conexión
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Mensaje de depuración
        // echo "Conexión a la base de datos establecida correctamente";

        return $conn;
    }
}
?>
