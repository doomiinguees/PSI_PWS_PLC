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
                                <?php if ($auth->getRole() != 3){?>
                                <th>Cliente</th>
                                <?php }?>
                                <th>Funcionário</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Ações</th>
                            </thead>
                                <tbody>
                                    <?php
                                        $auth = new Auth();
                                        foreach ($folhas as $folha) {
                                    ?>
                                    <tr>
                                        <td><?=$folha->id + 5000?></td>
                                        <?php if ($auth->getId() != 3){ ?>
                                        <td><?=$folha->cliente->nome?></td>
                                        <?php } ?>
                                        <td><?=$folha->funcionario->nome?></td>
                                        <td><?=$folha->total?> </td>
                                        <td><?=$folha->estado?> </td>
                                        <td>
                                            <a href="index.php?c=folhaobra&a=show&id=<?=$folha->id ?>" class="btn btn-info" role="button">Show</a>
                                            <?php
                                                if ($auth->getRole() != 3):
                                                if ($folha->estado != 'Anulada'):
                                            ?>
                                                    <a href="index.php?c=folhaobra&a=edit&id=<?=$folha->id ?>" class="btn btn-info" role="button">Edit</a>
                                                    <a href="index.php?c=folhaobra&a=delete&id=<?=$folha->id ?>" class="btn btn-warning" role="button">Anular</a>
                                                    <a href="index.php?c=folhaobra&a=emitir&id=<?=$folha->id ?>" class="btn btn-info" role="button">Emitir</a>
                                            <?php
                                                endif;
                                                else:
                                            ?>
                                                    <a href="index.php?c=folhaobra&a=edit&id=<?=$folha->id ?>" class="btn btn-info" role="button">Pagar</a>
                                            <?php
                                                endif;
                                            ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                        </table>
                        <br>
                            <?php
                                if ($auth->getRole() != 3):
                            ?>
                                <a href="index.php?c=folhaobra&a=scliente" class="btn btn-info" role="button">Criar Folha de Obra</a>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>