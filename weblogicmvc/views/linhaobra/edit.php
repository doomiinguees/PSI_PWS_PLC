<h1 class="m-0"></h1>
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
                            <b><!--mais dados--></b>
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
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr style="color: white">
                        <form method="post" action="index.php?c=linhaobra&a=update&id=<?= $linha->id ?>">
                            <td>
                                <select class="form-control select2 select2-hidden-accessible" name="id_service">
                                    <?php
                                    foreach ($services as $service){
                                        ?>
                                        <option value="<?= $service->id ?>"><?= $service->nome.' | '.$service->referencia ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?php if(isset($linha)) { echo $linha->quantidade; }?>" name="quantidade">
                            </td>
                            <td>
                                <button type="submit" style="float: right;" class="btn btn-info">Editar</button>
                            </td>
                    </tr>
                    </tbody>
                </table>
                </form>
            </div>
        </div>
    </div>
    <!-- /.card -->
</section>