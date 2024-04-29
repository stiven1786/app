<?php include_once 'header.php'; ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Categorías</h4>

                        <!-- Botón para agregar una nueva categoría -->
                        <a href="#" class="btn btn-success btn-sm mb-3" role="button" id="btnNuevaCategoria"><i class="ti-plus btn-icon-prepend mr-1"></i> Nuevo</a>

                        <!-- Formulario para crear una nueva categoría (inicialmente oculto) -->
                        <form class="mb-3" id="formNuevaCategoria" style="display: none;" action="index.php?action=guardar_categoria" method="POST">
                            <div class="form-group">
                                <label for="inputCategoria">Categoría</label>
                                <input type="text" class="form-control" id="inputCategoria" name="categoria" placeholder="Ingrese el nombre de la categoría" required>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                            <button type="button" class="btn btn-light" id="btnCancelar">Cancelar</button>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Categoría</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categorias as $categoria) : ?>
                                        <tr>
                                            <td><?php echo $categoria['id']; ?></td>
                                            <td><?php echo $categoria['categoria']; ?></td>
                                            <td>
                                                <!-- Botones de acciones para cada categoría -->
                                                <a href="#" class="btn btn-primary btn-sm" role="button"><i class="ti-eye btn-icon-prepend mr-1"></i> Ver</a>
                                                <a href="#" class="btn btn-warning btn-sm" role="button"><i class="ti-pencil btn-icon-prepend mr-1"></i> Editar</a>
                                                <a href="#" class="btn btn-danger btn-sm" role="button"><i class="ti-trash btn-icon-prepend mr-1"></i> Eliminar</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Obtener referencia a los elementos del DOM
        var btnNuevaCategoria = document.getElementById("btnNuevaCategoria");
        var formNuevaCategoria = document.getElementById("formNuevaCategoria");
        var btnCancelar = document.getElementById("btnCancelar");

        // Mostrar el formulario de nueva categoría cuando se hace clic en el botón "Nuevo"
        btnNuevaCategoria.addEventListener("click", function() {
            formNuevaCategoria.style.display = "block";
        });

        // Ocultar el formulario de nueva categoría cuando se hace clic en el botón "Cancelar"
        btnCancelar.addEventListener("click", function() {
            formNuevaCategoria.style.display = "none";
        });
    });
</script>
