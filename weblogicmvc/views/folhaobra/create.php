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
                <br>
                <a href="index.php?c=folhaobra&a=store&id=<?=$cliente->id ?>" class="btn btn-info" style="float: right;" role="button">Adicionar Linha</a>

            </div>
        </div>
    </div>
    <!-- /.card -->
</section>