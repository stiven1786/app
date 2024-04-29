<?php

// app/app/controllers/CategoriaController.php

// Incluir el modelo de categorías
require_once BASE_PATH . '/app/models/CategoriaModel.php';

class CategoriaController {
    // Método para mostrar todas las categorías
    public function index() {
        // Obtener todas las categorías
        $categorias = CategoriaModel::getAll();

        // Incluir la vista de categorías
        include BASE_PATH . '/app/views/categorias.php';
    }

    // Método para guardar una nueva categoría
    public function guardarCategoria() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Verificar si se ha enviado el formulario
            if (isset($_POST['categoria'])) {
                // Obtener el nombre de la categoría del formulario
                $nombreCategoria = $_POST['categoria'];

                // Guardar la categoría en la base de datos
                $guardado = CategoriaModel::guardar($nombreCategoria);

                if ($guardado) {
                    // Si se guardó correctamente, redirigir a la página de categorías con un mensaje de éxito
                    header('Location: ' . BASE_URL . '/index.php?action=categorias&success=true');
                    exit;
                } else {
                    // Si no se pudo guardar, redirigir con un mensaje de error
                    header('Location: ' . BASE_URL . '/index.php?action=categorias&error=true');
                    exit;
                }
            }
        }
    }
}
