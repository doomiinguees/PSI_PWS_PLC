                <h1 class="m-0">Ver Detalhes do Cliente</h1>
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
                            <tbody>
                            <tr>
                                <td>Nome</td>
                                <td><?=$book->nome?></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><?=$book->username?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?=$book->email?></td>
                            </tr>
                            <tr>
                                <td>Telefone</td>
                                <td><?=$book->telefone?></td>
                            </tr>
                            <tr>
                                <td>Número de Identificação Fiscal</td>
                                <td><?=$book->nif?></td>
                            </tr>
                            <tr>
                                <td>Morada</td>
                                <td><?=$book->modada?><br><?=$book->localidade?><br><?=$book->codpostal?></td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="index.php?c=cliente&a=index" class="btn btn-info" role="button">Voltar</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>