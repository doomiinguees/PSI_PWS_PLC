<!DOCTYPE html>
<html>
<head>
    <link href="../../public/css/adminlte.css" rel="stylesheet">
    <title><?=APP_NAME?></title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../public/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="../../public/img/logo_main.png" alt="HRD Services" class="brand-image img-circle elevation-3" style="opacity: .8" height="60" width="60">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <p>Folhas de Obra</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <p>Clientes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <p>Serviços</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <p>IVA</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <p>Funcionários</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <p>
                        Conta
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="./index.html" class="nav-link">
                        <p>Alterar Dados de Conta</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./index2.html" class="nav-link">
                        <p>Log Out</p>
                        </a>
                    </li>
                    </ul>
                </li>
                </ul>
            </nav>>
            <?php require_once($viewPath); ?>
        </div>
        </aside>
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 HDR Services.</strong>
            All rights reserved.
        </footer>
    </div>
    <script src="../../public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../public/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="../../public/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="../../public/plugins/raphael/raphael.min.js"></script>
    <script src="../../public/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="../../public/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="../../public/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="../../public/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../public/js/pages/dashboard2.js"></script>
</body>
</html>