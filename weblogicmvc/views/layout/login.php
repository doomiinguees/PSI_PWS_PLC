<?php
    require_once '././startup/config.php';
?>
<head>
    <link href="public/css/adminlte.css" rel="stylesheet">
    <title><?=APP_NAME?></title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    <?php require_once($viewPath); ?>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../public/js/adminlte.min.js"></script>
</body>
</html>