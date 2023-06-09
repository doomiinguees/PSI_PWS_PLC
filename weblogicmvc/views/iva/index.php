                <h1 class="m-0">Iva</h1>
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
                                <th>Percentagem</th>
                                <th>Descrição</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($ivas as $iva){ ?>
                            <tr>
                                <td><?=$iva->valor?></td>
                                <td><?=$iva->descricao?></td>
                                <td>
                                    <a href="index.php?c=cliente&a=edit&id=<?=$iva->id?>" class="btn btn-info" role="button">Editar</a>
                                    <a href="index.php?c=cliente&a=delete&id=<?=$iva->id?>" class="btn btn-info" role="button">Eliminar</a>
                                    <!-- Repor password?-->
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="index.php?c=cliente&a=create" class="btn btn-info" role="button">Criar Cliente</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>