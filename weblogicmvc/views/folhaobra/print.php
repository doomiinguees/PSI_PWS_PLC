<!DOCTYPE html>
<html>
<head>
    <link href="public/css/adminlte_print.css" rel="stylesheet">
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

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Folha de Obra</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
<!-- /.content-header -->
<!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <img src="public/img/mlogo.png" alt="HD Services" class="brand-image img-circle elevation-3" style="opacity: .8" height="25" width="25"></i>HD Services
                                        <small class="float-right">Date: <?= date('d-m-Y') ?></small>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    Empresa
                                    <address>
                                        <strong><?= $folha->empresa->name ?></strong><br>
                                        <?= $folha->empresa->morada ?><br>
                                        <?= $folha->empresa->codpostal ?>, <?= $folha->empresa->localidade ?><br>
                                        <?= $folha->empresa->telefone ?><br>
                                        <?= $folha->empresa->email ?>
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    Cliente
                                    <address>
                                        <strong><?=$folha->cliente->nome?></strong><br>
                                        <?=$folha->cliente->morada?><br>
                                        <?=$folha->cliente->codpostal?>, <?=$folha->cliente->localidade?><br>
                                        <?=$folha->cliente->telefone?><br>
                                        <?=$folha->cliente->email?>
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>Invoice # <?= $folha->id ?></b>
                                    <br><br>
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Serviço</th>
                                <th>Quantidade</th>
                                <th>Valor</th>
                                <th>Valor IVA</th>

                            </tr>
                            </thead>

                            <tbody>
                            <tr style="color: white">
                                <?php
                                $subtotal = 0;
                                $totaliva = 0;
                                $total = 0;
                                foreach ($linhas as $linha) {
                                $subtotal = $subtotal + $linha->valor;
                                $totaliva = $totaliva + $linha->valiva;
                                ?>
                            <tr style="color: white">
                                <td><?= '['. $linha->service->referencia. ']  ' .$linha->service->nome?></td>
                                <td><?= $linha->quantidade ?></td>
                                <td><?= $linha->valor ?></td>
                                <td><?= $linha->valiva ?></td>
                            </tr>
                            <?php
                            }
                            $total = $total + $subtotal + $totaliva;
                            ?>

                            </tr>
                            </tbody>
                        </table>
                        <br><br><br>
                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">
                                <p class="lead">Payment Methods:</p>
                                <img src="public/img/credit/visa.png" alt="Visa">
                                <img src="public/img/credit/mastercard.png" alt="Mastercard">
                                <img src="public/img/credit/american-express.png" alt="American Express">
                                <img src="public/img/credit/paypal2.png" alt="Paypal">

                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody><tr>
                                            <th style="width:50%">Subtotal</th>
                                            <td><?= $subtotal ?>€</td>
                                        </tr>
                                        <tr>
                                            <th>IVA</th>
                                            <td><?= $totaliva ?>€</td>
                                        </tr>
                                        <tr>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td><?= $total ?>€</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
    </div><!-- /.col -->
<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="public/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="public/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="public/plugins/raphael/raphael.min.js"></script>
<script src="public/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="public/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../../public/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../../public/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../public/js/pages/dashboard2.js"></script>
</body>
</html>