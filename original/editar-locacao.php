<h1>Editar Locação</h1>
<?php
    $sql = "SELECT * FROM locacao WHERE id_locacao=".$_REQUEST['id_locacao'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=salvar-modelo" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_locacao" value="<?php print $row->id_locacao; ?>">
    <div class="mb-3">
        <label>Data de Locação
            <input type="date" name="data_locacao" class="form-control" value="<?php print $row->data_locacao; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Data de Devolução
            <input type="date" name="data_devolucao" class="form-control" value="<?php print $row->data_devolucao; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Cliente
            <select name="cliente_id_cliente" class="form-control" required>
                <option value="">Selecione o Cliente</option>
                <?php
                    $sql_cliente = "SELECT * FROM cliente";
                    $res_cliente = $conn->query($sql_cliente);

                    while($row_cliente = $res_cliente->fetch_object()){
                        $selecionado = ($row_cliente->id_cliente == $row->cliente_id_cliente) ? 'selected' : '';
                        
                        print "<option value='{$row_cliente->id_cliente}' {$selecionado}>{$row_cliente->nome_cliente}</option>";
                    }
                ?>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label>Filme
            <select name="filme_id_filme" class="form-control" required>
                <option value="">Selecione o Filme</option>
                <?php
                    $sql_filme = "SELECT * FROM filme";
                    $res_filme = $conn->query($sql_filme);

                    while($row_filme = $res_filme->fetch_object()){
                        $selecionado = ($row_filme->id_filme == $row->filme_id_filme) ? 'selected' : '';
                        
                        print "<option value='{$row_filme->id_filme}' {$selecionado}>{$row_filme->nome_filme}</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>