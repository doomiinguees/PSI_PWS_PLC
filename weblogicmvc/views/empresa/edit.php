<h1 class="m-0">Editar Cliente</h1>
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
            <?php // var_dump($user);?>
            <form method="post" action="index.php?c=empresa&a=update&id=1">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" name="name" value="<?php if(isset($empresa)) { echo $empresa->name; } ?>">
                <br>
                <label for="exampleInputEmail1">Designação</label>
                <input type="text" class="form-control" name="designacao" value="<?php if(isset($empresa)) { echo $empresa->designacao; } ?>">
                <br>
                <label for="exampleInputEmail1">Número de Identificação Fiscal</label>
                <input type="text" class="form-control" name="nif" value="<?php if(isset($empresa)) { echo $empresa->nif; } ?>">
                <br>
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email" value="<?php if(isset($empresa)) { echo $empresa->email; } ?>">
                <br>
                <label for="exampleInputEmail1">Telefone</label>
                <input type="text" class="form-control" name="telefone" value="<?php if(isset($empresa)) { echo $empresa->telefone; } ?>">
                <br>
                <label for="exampleInputEmail1">Morada</label>
                <input type="text" class="form-control" name="morada" value="<?php if(isset($empresa)) { echo $empresa->morada; } ?>">
                <br>
                <label for="exampleInputEmail1">Localidade</label>
                <input type="text" class="form-control" name="localidade" value="<?php if(isset($empresa)) { echo $empresa->localidade; } ?>">
                <br>
                <label for="exampleInputEmail1">Código Postal</label>
                <input type="text" class="form-control" name="codpostal" value="<?php if(isset($empresa)) { echo $empresa->codpostal; } ?>">
                <br>
                <label for="exampleInputEmail1">Capital Social</label>
                <input type="number" step="0.1" class="form-control" name="capsocial" value="<?php if(isset($empresa)) { echo $empresa->capsocial; } ?>">
                <br>
                <button type="submit" style="float: right;" class="btn btn-primary">Editar Cliente</button>
            </form>
        </div>
    </div>
    <!-- /.card -->
</section>