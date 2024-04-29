<?php
// app/app/models/CategoriaModel.php

require_once __DIR__ . '/../../config/database.php';

class CategoriaModel {
    // Método para obtener todas las categorías
    public static function getAll() {
        $conn = DB::getConnection(); // Obtiene la conexión a la base de datos
        $stmt = $conn->prepare("SELECT * FROM productos_categorias");
        $stmt->execute();
        $categorias = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $categorias;
    }

    // Método para guardar una nueva categoría
    public static function guardar($nombre_categoria) {
        $conn = DB::getConnection(); // Obtiene la conexión a la base de datos
        $stmt = $conn->prepare("INSERT INTO productos_categorias (categoria) VALUES (?)");
        $stmt->bind_param("s", $nombre_categoria);
        $stmt->execute();
        $stmt->close();
        return true;
    }
}
?>
