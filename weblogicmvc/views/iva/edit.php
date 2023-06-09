                <h1 class="m-0">Editar Iva</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <!-- left column -->
    <div class="col-md-12"> <!--Tamanho do card é aqui-->
        <div class="card-body">
            <form method="post" action="index.php?c=iva&a=update&id=<?=$iva->id?>">
                <label for="exampleInputEmail1">Percentagem</label>
                <input type="number" class="form-control" name="valor" placeholder="Percentagem">
                <br>
                <label for="exampleInputEmail1">Descrição</label>
                <input type="text" class="form-control" name="descricao" placeholder="Descrição">
                <br>
                <button type="submit" style="float: right;" class="btn btn-primary">Criar Iva</button>
            </form>
        </div>
    </div>
    <!-- /.card -->
</section>