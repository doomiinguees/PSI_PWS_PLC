                <h1 class="m-0">Folhas de obra</h1>
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
                                <th>Id</th>
                                <?php if ($auth->getId() != 3){ ?>
                                <th>Cliente</th>
                                <?php } ?>
                                <th>Funcionário</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Ações</th>
                            </thead>
                                <tbody>
                                <?php
                                    $auth = new Auth();
                                    foreach ($folhas as $folha) { ?>
                                    <tr>
                                        <td><?=$folhas->id?></td>
                                        <?php if ($auth->getId() != 3){ ?>
                                        <td><?=$folhas->cliente->nome?></td>
                                        <?php } ?>
                                        <td><?=$auth->getId();?></td>
                                        <td><?=$folhas->total?> </td>
                                        <td><?=$folhas->estado?> </td>
                                        <td>
                                            <a href="index.php?c=folhaobra&a=show&id=<?=$folhas->id ?>" class="btn btn-info" role="button">Show</a>
                                            <a href="index.php?c=folhaobra&a=edit&id=<?=$folhas->id ?>" class="btn btn-info" role="button">Edit</a>
                                            <a href="index.php?c=folhaobra&a=delete&id=<?=$folhas->id ?>" class="btn btn-warning" role="button">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                        </table>
                        <br>
                        <?php if ($auth->getId() != 3){ ?>
                        <a href="index.php?c=folhaobra&a=create" class="btn btn-info" role="button">Criar Folha de Obra</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>