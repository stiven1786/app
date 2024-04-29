<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cartera SANDOR</title>
  <link rel="stylesheet" href="./public/template/vendors/feather/feather.css">
  <link rel="stylesheet" href="./public/public/template/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="./public/public/template/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="./public/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="./public/template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="./public/template/text/css" href="./template/js/select.dataTables.min.css">
  <link rel="stylesheet" href="./public/template/css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="./public/template/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="./public/img/bsb-logo.svg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="./public/template/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="./public/img/icon-usuario.png" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href="index.php?action=logout" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Cerrar Sesión
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Informes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Informe de Usuarios</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Cartera</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Productos</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>