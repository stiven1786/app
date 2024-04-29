<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sarupetrol SAS</title>
    <link rel="stylesheet" href="./public/template/vendors/feather/feather.css">
    <link rel="stylesheet" href="./public/template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./public/template/vendors/css/vendor.bundle.base.css">
    <!-- Referenciar archivo CSS -->
    <link rel="stylesheet" href="./public/css/styles.css">
    <link rel="stylesheet" href="./public/template/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="./public/template/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="./public/img/bsb-logo.svg" alt="logo">
                            </div>
                            <h4>¡Hola! Bienvenido(a)</h4>
                            <h6 class="font-weight-light">Inicie sesión para continuar.</h6>
                            <form id="loginForm" class="pt-3" action="index.php?action=login" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="username" placeholder="Usuario" required>
                                </div>
                                <div class="form-group position-relative">
                                    <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Contraseña" required>
                                    <!-- Botón para ver la contraseña -->
                                    <i class="ti-eye toggle-password"></i>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Iniciar Sesión</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <a href="#" class="auth-link text-black">¿Olvidó su contraseña?</a>
                                </div>
                            </form>
                            <div id="errorAlert" class="error-notification">
                                <?php if (!empty($errorMessage)) : ?>
                                    <?php echo $errorMessage; ?>
                                <?php endif; ?>
                            </div> <!-- Notificación de error -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/template/vendors/js/vendor.bundle.base.js"></script>
    <script src="./public/template/js/off-canvas.js"></script>
    <script src="./public/template/js/hoverable-collapse.js"></script>
    <script src="./public/template/js/template.js"></script>
    <script src="./public/template/js/settings.js"></script>
    <script src="./public/template/js/todolist.js"></script>
    <!-- Referenciar archivo JavaScript -->
    <script src="./public/js/scripts.js" defer></script>
</body>

</html>
