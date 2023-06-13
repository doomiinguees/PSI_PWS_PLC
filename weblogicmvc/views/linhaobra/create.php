<h1 class="m-0"></h1>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<section class="content">
    <!-- left column -->
    <div class="col-md-12"> <!--Tamanho do card é aqui-->
        <div class="card-body">
            <form method="post" action="index.php?c=service&a=store">
                <label for="exampleInputEmail1">Serviço</label>
                <?php foreach ($services as $service){?>
                    <option value="<?= $service->id?>"><?= $service->nome.'% ('.$service->referencia.')'?></option>
                <?php } ?>
                <br>
                <label for="exampleInputEmail1">Quantidade</label>
                <input type="text" class="form-control" name="quantidade" placeholder="Quantidade">
                <br>
                <br>
                <button type="submit" style="float: right;" class="btn btn-primary">Criar Iva</button>
            </form>
        </div>
    </div>
    <!-- /.card -->
</section>