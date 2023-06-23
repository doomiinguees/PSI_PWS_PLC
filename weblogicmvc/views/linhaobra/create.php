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
                    </tr>
                    </thead>

                    <tbody>
                        <tr style="color: white">
                            <form method="post" action="index.php?c=linhaobra&a=store&id=<?= $folha->id ?>">
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
                                    <input type="number" class="form-control" name="quantidade">
                                </td>

                        </tr>
                    </tbody>
                </table>
                <br>
                                <button type="submit" style="float: right;" class="btn btn-info">Adicionar</button>
                            </form>
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
                    foreach ($linhas as $linha) {

                    ?>
                    <tr style="color: white">
                        <td><?= '['. $linha->service->referencia. ']  ' .$linha->service->nome?></td>
                        <td><?= $linha->quantidade ?></td>
                        <td><?= $linha->valor ?></td>
                        <td><?= $linha->valiva ?></td>
                        <td>
                            <a href="index.php?c=folhaobra&a=edit&id=<?=$folha->id ?>" class="btn btn-info" role="button">Editar</a>
                            <a href="index.php?c=folhaobra&a=delete&id=<?=$folha->id ?>" class="btn btn-warning" role="button">Apagar</a>
                        </td>
                    </tr>
                    <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.card -->
</section>