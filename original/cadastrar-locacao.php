<h1>Cadastrar Locação</h1>
<form action="?page=salvar-locacao" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Data da Locação
            <input type="date" name="data_locacao" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Data da Devolução
            <input type="date" name="data_devolucao" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Cliente
            <select name="cliente_id_cliente" class="form-control" required>
                <option value="">Selecione o cliente</option>
                <?php
                    $sql = "SELECT * FROM cliente";
                    $res = $conn->query($sql);
                    while($row = $res->fetch_object()){
                        echo "<option value='{$row->id_cliente}'>{$row->nome_cliente}</option>";
                    }
                ?>
            </select>
    </div>
    <div class="mb-3">
        <label>Filme
            <select name="filme_id_filme" class="form-control" required>
                <option value="">Selecione o filme</option>
                <?php
                    $sql = "SELECT * FROM filme";
                    $res = $conn->query($sql);
                    while($row = $res->fetch_object()){
                        echo "<option value='{$row->id_filme}'>{$row->titulo_filme}</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>


</form>