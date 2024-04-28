<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sarupetrol SAS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./template/vendors/feather/feather.css">
    <link rel="stylesheet" href="./template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./template/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="./template/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="./template/images/favicon.png" />
    <link rel="shortcut icon" href="./template/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="./assets/img/bsb-logo.svg" alt="logo">
                            </div>
                            <h4>¡Hola! Bienvenido(a)</h4>
                            <h6 class="font-weight-light">Inicie sesión para continuar.</h6>
                            <form class="pt-3" action="index.php?action=login" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="username" placeholder="Usuario" required>
                                </div>
                                <div class="form-group position-relative">
                                    <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Contraseña" required>
                                </div>
                                <div class="mt-3">
                                    <!-- Cambiado el texto del botón y eliminado el href -->
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Iniciar Sesión</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <a href="#" class="auth-link text-black">¿Olvidó su contraseña?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (!empty($errorMessage)) : ?>
                <div id="errorAlert" class="alert alert-danger mt-3 text-center" role="alert" style="position: fixed; top: 0; left: 50%; transform: translateX(-50%); z-index: 1000; width: 100%;">
                    <?= $errorMessage ?>
                </div>
                <script>
                    // Ocultar el mensaje de error después de 2 segundos
                    setTimeout(function() {
                        document.getElementById('errorAlert').style.display = 'none';
                    }, 2000);
                </script>
            <?php endif; ?>

            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./template/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./template/js/off-canvas.js"></script>
    <script src="./template/js/hoverable-collapse.js"></script>
    <script src="./template/js/template.js"></script>
    <script src="./template/js/settings.js"></script>
    <script src="./template/js/todolist.js"></script>
    <!-- endinject -->
    <script>
        document.querySelector('.toggle-password').addEventListener('click', function() {
            var inputPassword = document.getElementById('exampleInputPassword1');
            var iconEye = document.querySelector('.toggle-password i');

            if (inputPassword.type === 'password') {
                inputPassword.type = 'text';
                iconEye.classList.remove('ti-eye');
                iconEye.classList.add('ti-eye-off');
            } else {
                inputPassword.type = 'password';
                iconEye.classList.remove('ti-eye-off');
                iconEye.classList.add('ti-eye');
            }
        });
    </script>
</body>

</html>