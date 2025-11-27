<h1>Editar Filme</h1>
<?php
    $sql = "SELECT * FROM filme WHERE id_filme=".$_REQUEST['id_filme'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=salvar-filme" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_filme" value="<?php print $row->id_filme; ?>">
    <div class="mb-3">
        <label>Título do Filme
            <input type="text" name="titulo_filme" class="form-control" value="<?php print $row->titulo_filme; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Gênero
            <input type="text" name="genero_filme" class="form-control" value="<?php print $row->genero_filme; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Ano
            <input type="date" name="ano_filme" class="form-control" value="<?php print $row->ano_filme; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Classificação
            <input type="text" name="classificacao_filme" class="form-control" value="<?php print $row->classificacao_filme; ?>">
        </label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
