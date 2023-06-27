<h1 class="m-0">Selecionar cliente</h1>
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
                        <div class="input-group">
                            <form method="post" action="index.php?c=folhaobra&a=pesquisa">
                                <div class="input-group-append" style="align-self: center">
                                    <input type="search" class="form-control " name="termo" placeholder="NIF, Nome ou Contacto">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>

                        </div>
                        <br>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>N.I.F.</th>
                                <th>Telefone</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user){ ?>
                                <tr>
                                    <td><?=$user->nome?></td>
                                    <td><?=$user->nif?></td>
                                    <td><?=$user->telefone?></td>
                                    <td>
                                        <a href="index.php?c=folhaobra&a=create&id=<?=$user->id?>" class="btn btn-info" role="button">Selecionar Cliente</a>
                                    </td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
