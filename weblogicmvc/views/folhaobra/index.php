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
                                <?php
                                    $auth = new Auth();
                                ?>
                                <th>Id</th>
                                <?php if ($auth->getRole() != 3){?>
                                <th>Cliente</th>
                                <?php }?>
                                <th>Funcionário</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Ações
                                    <?php echo $auth->getRole();?></th>
                            </thead>
                                <tbody>
                                    <?php
                                        foreach ($folhas as $folha) {
                                    ?>
                                    <tr>
                                        <td><?=$folha->id?></td>
                                        <?php if ($auth->getRole() != 3){ ?>
                                        <td><?=$folha->cliente->nome?></td>
                                        <?php } ?>
                                        <td><?=$folha->funcionario->nome?></td>
                                        <td><?=$folha->total + $folha->ivatotal?> </td>
                                        <td><?=$folha->estado?> </td>
                                        <td>
                                            <a href="index.php?c=folhaobra&a=show&id=<?=$folha->id ?>" class="btn btn-info" role="button">Ver detalhes</a>
                                            <?php
                                                if ($auth->getRole() != 3){
                                                    if ($folha->estado == 'Em Lançamento'){

                                                ?>
                                                        <a href="index.php?c=folhaobra&a=edit&id=<?=$folha->id ?>" class="btn btn-warning" role="button">Editar</a>

                                                        <a href="index.php?c=folhaobra&a=emitir&id=<?=$folha->id ?>" class="btn btn-success" role="button">Emitir</a>
                                                <?php
                                                    }elseif($folha->estado == 'Emitida'){
                                                ?>
                                                <a href="index.php?c=folhaobra&a=anular&id=<?=$folha->id ?>" class="btn btn-danger" role="button">Anular</a>
                                            <?php
                                                }
                                                }elseif ($auth->getRole() == 3 && $folha->estado != 'Paga'){
                                            ?>
                                                    <a href="index.php?c=folhaobra&a=pay&id=<?=$folha->id ?>" class="btn btn-success" role="button">Pagar</a>
                                            <?php
                                                }
                                                if ($folha->estado == 'Paga'){
                                            ?>
                                                    <a href="index.php?c=folhaobra&a=print&id=<?= $folha->id ?>" target="_blank" class="btn btn-light" role="button">Imprimir</a>
                                            <?php
                                                }
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