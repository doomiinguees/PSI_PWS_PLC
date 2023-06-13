<h1 class="m-0">HD Services</h1>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <tbody>
                        <tr>
                            <td>Nome</td>
                            <td><?= $empresa->name;?></td>
                        </tr>
                        <tr>
                            <td>Designação</td>
                            <td><?=$empresa->designacao?></td>
                        </tr>
                        <tr>
                            <td>Número de Identificação Fiscal</td>
                            <td><?=$empresa->nif?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?=$empresa->email?></td>
                        </tr>
                        <tr>
                            <td>Telefone</td>
                            <td><?=$empresa->telefone?></td>
                        </tr><tr>
                            <td>Morada</td>
                            <td><?=$empresa->morada?><br><?=$empresa->localidade?><br><?=$empresa->codpostal?></td>
                        </tr>
                        <tr>
                            <td>Capital Social</td>
                            <td><?=$empresa->capsocial.' €'?></td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <?php
                        $auth = new Auth();
                        if($auth->getRole() != 3){
                    ?>
                    <a href="index.php?c=empresa&a=edit" class="btn btn-info" role="button">Editar dados da empresa</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--
                <div class="row">

                    </div>

                </div>-->