                <h1 class="m-0">Ver Detalhes do Funcionário</h1>
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
                <div >
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>Nome</td>
                                <td><?=$user->nome?></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><?=$user->username?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?=$user->email?></td>
                            </tr>
                            <tr>
                                <td>Telefone</td>
                                <td><?=$user->telefone?></td>
                            </tr>
                            <tr>
                                <td>Função</td>
                                <td><?php if($user->role == 1){
                                        echo("Administrador");
                                    }else{
                                        echo("Funcionário");
                                    }?></td>
                            </tr>
                            <tr>
                                <td>Número de Identificação Fiscal</td>
                                <td><?=$user->nif?></td>
                            </tr>
                            <tr>
                                <td>Morada</td>
                                <td><?=$user->morada?><br><?=$user->localidade?><br><?=$user->codpostal?></td>
                            </tr>
                            </tbody>
                        </table><br>
                        <a href="index.php?c=cliente&a=index" class="btn btn-info" role="button">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>