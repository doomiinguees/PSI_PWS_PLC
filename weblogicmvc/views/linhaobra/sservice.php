<h1 class="m-0">Serviços</h1>
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
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Referência</th>
                                <th>Preco/Hora</th>
                                <th>IVA</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($services as $service){ ?>
                                <tr>
                                    <td><?=$service->nome?></td>
                                    <td><?=$service->referencia?></td>
                                    <td><?=$service->precohora?></td>
                                    <td><?=$service->iva->valor.'% ('.$service->iva->descricao.')'?></td>
                                    <td>
                                        <a href="../folhaobra/index.php?c=linhaobra&a=edit&id=<?=$folha->id?>" class="btn btn-info" role="button">Selecionar Serviço</a>
                                    </td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
