<div class="col-sm-6">
    <h1>Folhas de Obra</h1>
</div>

<div class="col-sm-6">
    <form action="" method="post">
        <button id="emitirFO">Emitir</button>
    </form>
</div>
<div class="col-sm-12">
    <table class="table tablestriped"><thead><th>Id</th><th>Cliente</th><th>SubTotal</th><th>IVA</th><th>Total</th><th>Estado</th><th>Ações</th></thead>
    <tbody>
    <?php foreach ($folhas as $folha) { ?>
        <tr>
            <?php $idfolha = $book->id?><!--Mudar para folha obra-->
            <td><?=$book->id?></td>
            <td><?=$book->cliente->nome?></td>
            <td><?=$book->subtotal?></td>
            <td><?=$book->iva ?> </td>
            <td><?=$book->total ?> </td>
            <td><?=$book->estado ?> </td>
            <td>
                <form method="post" action="">
                    <!-- <button id="editar<?=$id?>" </button>
                    <button id="emitir<?=$id?>" </button> -->
                </form>
            <td>
                <a href="index.php?c=book&a=show&id=<?=$book->id ?>" class="btn btn-info" role="button">Show</a>
                <a href="index.php?c=book&a=edit&id=<?=$book->id ?>" class="btn btn-info" role="button">Edit</a>
                <a href="index.php?c=book&a=delete&id=<?=$book->id ?>" class="btn btn-warning" role="button">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>