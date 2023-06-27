                <h1 class="m-0">Editar Funcionário</h1>
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
            <form method="post" action="index.php?c=funcionario&a=update&id=<?= $user->id ?>">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?php if(isset($user)) { echo $user->nome; } ?>">
                <br>
                <label for="exampleInputEmail1">Número de Identificação Fiscal</label>
                <input type="text" class="form-control" name="nif" value="<?php if(isset($user)) { echo $user->nif; } ?>">
                <br>
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" value="<?php if(isset($user)) { echo $user->username; } ?>">
                <br>
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email" value="<?php if(isset($user)) { echo $user->email; } ?>">
                <br>
                <label for="exampleInputEmail1">Telefone</label>
                <input type="text" class="form-control" name="telefone" value="<?php if(isset($user)) { echo $user->telefone; } ?>">
                <br>
                <label for="exampleInputEmail1">Função</label>
                <select class="form-control select2 select2-hidden-accessible" name="role">
                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                </select>
                <br>
                <?php
                    $auth = new Auth();
                    if ($user->id == $auth->getId()){
                ?>
                <label for="exampleInputEmail1">Palavra-Passe</label>
                <input type="password" class="form-control" name="password" value="<?php if(isset($user)) { echo $user->password; } ?>">
                <br>
                <?php } ?>
                <label for="exampleInputEmail1">Morada</label>
                <input type="text" class="form-control" name="morada" value="<?php if(isset($user)) { echo $user->morada; } ?>">
                <br>
                <label for="exampleInputEmail1">Localidade</label>
                <input type="text" class="form-control" name="localidade" value="<?php if(isset($user)) { echo $user->localidade; } ?>">
                <br>
                <label for="exampleInputEmail1">Código Postal</label>
                <input type="text" class="form-control" name="codpostal" value="<?php if(isset($user)) { echo $user->codpostal; } ?>">
                <br>
                <button type="submit" style="float: right;" class="btn btn-info">Editar Funcionário</button>
            </form>
        </div>
    </div>
    <!-- /.card -->
</section>