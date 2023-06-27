                <h1 class="m-0">Funcionário</h1>
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
                                <th>N.I.F.</th>
                                <th>Morada</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user){ ?>
                                <tr>
                                    <td><?=$user->nome?></td>
                                    <td><?=$user->nif?></td>
                                    <td><?=$user->morada.'<br>'.$user->localidade.'<br>'.$user->codpostal?></td>
                                    <td>
                                        <a href="index.php?c=funcionario&a=show&id=<?=$user->id?>" class="btn btn-info" role="button">Ver detalhes</a>
                                        <a href="index.php?c=funcionario&a=edit&id=<?=$user->id?>" class="btn btn-info" role="button">Editar</a>
                                        <a href="index.php?c=funcionario&a=reporpass&id=<?=$user->id?>" class="btn btn-info" role="button">Repor palavra-passe</a>
                                        <!-- Repor password?-->
                                    </td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                        <br>
                        <a href="index.php?c=funcionario&a=create" class="btn btn-info" role="button">Criar Funcionário</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

