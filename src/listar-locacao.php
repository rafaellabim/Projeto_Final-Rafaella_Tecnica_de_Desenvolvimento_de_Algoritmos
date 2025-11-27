/*
Arquivo: listar-locacao.php
Local original: /mnt/data/avaliacao_repositorio/original/listar-locacao.php
Resumo: Versão do arquivo preparada para inclusão no repositório. 
       Este arquivo contém um cabeçalho de documentação gerada automaticamente.
Por favor revise os comentários e adicione detalhes específicos do projeto.
*/

<h1>Listar Locação</h1>
<?php
$sql= "SELECT * FROM locacao";
$res = $conn->query($sql);
$qtd= $res->num_rows;
if($qtd > 0){
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Data da Locação</th>";
    print "<th>Data da Devolução</th>";
    print "<th>Cliente</th>";
    print "<th>Filme</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while($row=$res->fetch_object()){
        print "<tr>";
        print "<td>" .$row->id_locacao."</td>";
        print "<td>" .$row->data_locacao."</td>";
        print "<td>" .$row->data_devolucao."</td>";
        print "<td>" .$row->cliente_id_cliente."</td>";
        print "<td>" .$row->filme_id_filme."</td>";
        print "<td>
                <button class='btn btn-success' onclick=\"location.href='?page=editar-locacao&id_locacao={$row->id_locacao}';\">Editar</button>

                <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-locacao&acao=excluir&id_locacao={$row->id_locacao}';}else{false;}\">Excluir</button>
                </td>";
        print "</tr>";
}
print "</table>";

}else{
    print "<p>Não encontrou resultado</p>";
}