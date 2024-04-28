<!-- users.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>

    <!-- Botón para abrir el formulario de creación de usuario -->
    <button onclick="openCreateUserForm()">Crear Usuario</button>

    <!-- Tabla para mostrar los usuarios -->
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Script para abrir el formulario de creación de usuario en un modal -->
    <script>
        function openCreateUserForm() {
            // Aquí puedes escribir el código para abrir un modal o un formulario emergente
            // Por ejemplo, puedes usar Bootstrap Modal o jQuery UI Dialog
            // Aquí hay un ejemplo básico con JavaScript puro:
            alert("Aquí abrirías el formulario para crear un nuevo usuario");
        }
    </script>
</body>
</html>
