
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
                                        <img src="public/img/mlogo.png" alt="HD Services" class="brand-image img-circle elevation-3" style="opacity: .8" height="25" width="25"></i>  HD Services
                                            <small class="float-right">Data: <?= date('l, d F Y H:i', strtotime($folha->data)) ?></small>
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
                        <table class="table table-striped" style="color: black">
                            <thead>
                            <tr>
                                <th>Serviço</th>
                                <th>Valor unitário</th>
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
                            <tr style="color: black">
                                <td><?= '['. $linha->service->referencia. ']  ' .$linha->service->nome?></td>
                                <td><?= $linha->service->precohora.'€' ?></td>
                                <td><?= $linha->quantidade ?></td>
                                <td><?= $linha->valor.'€' ?></td>
                                <td><?= $linha->valiva.'€' ?></td>
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
                                            <td><?= $folha->ivatotal ?>€</td>
                                        </tr>
                                        <tr>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td><?= $folha->total ?>€</td>
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