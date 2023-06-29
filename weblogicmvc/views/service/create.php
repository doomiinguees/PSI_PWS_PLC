                <h1 class="m-0">Criar Serviço</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <!-- left column -->
    <div class="col-md-12"> <!--Tamanho do card é aqui-->
        <div class="card-body">
            <form method="post" action="index.php?c=service&a=store">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome">
                <br>
                <label for="exampleInputEmail1">Referância</label>
                <input type="text" class="form-control" name="referencia" placeholder="Referência">
                <br>
                <label for="exampleInputEmail1">Preço/Hora</label>
                <input type="number" class="form-control" name="precohora" placeholder="Preço/Hora">
                <br>
                <label for="exampleInputEmail1">IVA</label>
                <select class="form-control select2 select2-hidden-accessible" name="iva_id">
                    <?php foreach ($ivas as $iva){?>
                        <option value="<?= $iva->id?>"><?= $iva->valor.'% ('.$iva->descricao.')'?></option>
                    <?php } ?>
                </select>
                <br>
                <button type="submit" style="float: right;" class="btn btn-info">Criar Serviço</button>
            </form>
        </div>
    </div>
    <!-- /.card -->
</section>