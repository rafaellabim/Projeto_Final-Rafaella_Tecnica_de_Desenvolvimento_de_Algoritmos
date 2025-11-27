<h1>Listar Filme</h1>
<?php
$sql= "SELECT * FROM filme";
$res = $conn->query($sql);
$qtd= $res->num_rows;
if($qtd > 0){
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Título</th>";
    print "<th>Gênero</th>";
    print "<th>Ano</th>";
    print "<th>Classificação</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while($row=$res->fetch_object()){
        print "<tr>";
        print "<td>" .$row->id_filme."</td>";
        print "<td>" .$row->titulo_filme."</td>";
        print "<td>" .$row->genero_filme."</td>";
        print "<td>" .$row->ano_filme."</td>";
        print "<td>" .$row->classificacao_filme."</td>";
        print "<td>
                <button class='btn btn-success' onclick=\"location.href='?page=editar-filme&id_filme={$row->id_filme}';\">Editar</button>

                <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-filme&acao=excluir&id_filme={$row->id_filme}';}else{false;}\">Excluir</button>
                </td>";
        print "</tr>";

}
print "</table>";

}else{
    print "<p>Não encontrou resultado</p>";
}