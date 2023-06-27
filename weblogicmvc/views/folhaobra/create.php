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
                                <i class="fas fa-globe"></i> HD Services
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
                                <strong><?= $empresa->name ?></strong><br>
                                <?= $empresa->morada ?><br>
                                <?= $empresa->codpostal ?>, <?= $empresa->localidade ?><br>
                                <?= $empresa->telefone ?><br>
                                <?= $empresa->email ?>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            Cliente
                            <address>
                                <strong><?=$cliente->nome?></strong><br>
                                <?=$cliente->morada?><br>
                                <?=$cliente->codpostal?>, <?=$cliente->localidade?><br>
                                <?=$cliente->telefone?><br>
                                <?=$cliente->email?>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <b>Invoice # xxxx</b><br>
                            <br>
                            <b><!--mais dados--></b>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a href="index.php?c=folhaobra&a=store&id=<?= $cliente->id?>" class="btn btn-info" style="float: right;" role="button">Adicionar Linha</a>
                <br><br>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Serviço</th>
                        <th>Quantidade</th>
                        <th>Preço Unitário</th>
                        <th>IVA</th>
                        <th>Ações</th>
                    </tr>
                    </thead>

                    <tbody>
                        <tr></tr>
                        <tr></tr>

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
                                    <td>0€</td>
                                </tr>
                                <tr>
                                    <th>IVA</th>
                                    <td>0€</td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>0€</td>
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