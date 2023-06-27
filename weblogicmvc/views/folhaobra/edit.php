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
                                <i class="fas fa-globe"></i> AdminLTE, Inc.
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
                            <b>Invoice # <?= $folha->id ?></b><br>
                            <br>
                            <a href="index.php?c=folhaobra&a=emitir&id=<?=$folha->id ?>" style="float: left;" class="btn btn-info" role="button">Emitir</a>
                            <br><br>
                            <a href="index.php?c=folhaobra&a=index" style="float: left;" class="btn btn-info" role="button">Ir para index de folhas de obra</a>
                            <b><!--mais dados--></b>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a href="index.php?c=linhaobra&a=create&id=<?=$folha->id ?>" class="btn btn-info" style="float: right;" role="button">Adicionar Linha</a>
                <br><br>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Serviço</th>
                        <th>Quantidade</th>
                        <th>Valor</th>
                        <th>Valor iva</th>
                        <th>Ações</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    $linhas = Linhaobra::find_all_by_id_folhaobra($folha->id);
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
                            <td>
                                <a href="index.php?c=linhaobra&a=edit&id=<?=$linha->id ?>" class="btn btn-info" role="button">Editar</a>
                                <a href="index.php?c=linhaobra&a=delete&id=<?=$linha->id ?>" class="btn btn-warning" role="button">Apagar</a>
                            </td>
                        </tr>
                        <?php
                    }
                    $total = $total + $subtotal + $totaliva;
                    ?>
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
                </div>            </div>
        </div>
    </div>
    <!-- /.card -->
</section>