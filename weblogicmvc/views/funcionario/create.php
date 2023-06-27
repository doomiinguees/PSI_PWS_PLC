                <h1 class="m-0">Criar Funcionário</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <!-- left column -->
    <div class="col-md-12"> <!--Tamanho do card é aqui-->
        <div class="card-body">
            <form method="post" action="index.php?c=funcionario&a=store">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome do cliente">
                <br>
                <label for="exampleInputEmail1">Número de Identificação Fiscal</label>
                <input type="text" class="form-control" name="nif" placeholder="NIF">
                <br>
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
                <br>
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
                <br>
                <label for="exampleInputEmail1">Telefone</label>
                <input type="text" class="form-control" name="telefone" placeholder="Telefone">
                <br>
                <label for="exampleInputEmail1">Função</label>
                <select class="form-control select2 select2-hidden-accessible" name="role">
                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                </select>
                <br>
                <label for="exampleInputEmail1">Morada</label>
                <input type="text" class="form-control" name="morada" placeholder="Morada">
                <br>
                <label for="exampleInputEmail1">Localidade</label>
                <input type="text" class="form-control" name="localidade" placeholder="Localidade">
                <br>
                <label for="exampleInputEmail1">Código Postal</label>
                <input type="text" class="form-control" name="codpostal" placeholder="Código Postal">
                <br>
                <button type="submit" style="float: right;" class="btn btn-primary">Criar funcionário</button>
            </form>
        </div>
    </div>
    <!-- /.card -->
</section>