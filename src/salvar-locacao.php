/*
Arquivo: salvar-locacao.php
Local original: /mnt/data/avaliacao_repositorio/original/salvar-locacao.php
Resumo: Versão do arquivo preparada para inclusão no repositório. 
       Este arquivo contém um cabeçalho de documentação gerada automaticamente.
Por favor revise os comentários e adicione detalhes específicos do projeto.
*/

<?php

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $locacao = $_POST['data_locacao'];
        $devolucao = $_POST['data_devolucao'];
        $cliente = intval($_POST['cliente_id_cliente']);
        $filme = intval($_POST['filme_id_filme']);

        if ($cliente <= 0) {
            print "<script>alert('Selecione um cliente válido!');</script>";
            print "<script>location.href='?page=cadastrar-cliente';</script>";
            exit;

        } elseif ($filme <= 0) {
            print "<script>alert('Selecione um filme válido!');</script>";
            print "<script>location.href='?page=cadastrar-filme';</script>";
            exit;
        }

        $sql = "INSERT INTO locacao 
                (data_locacao, data_devolucao, cliente_id_cliente, filme_id_filme) 
                VALUES ('{$locacao}', '{$devolucao}', '{$cliente}', '{$filme}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrou com sucesso');</script>";
            print "<script>location.href='?page=listar-locacao';</script>";
        } else {
            print "<script>alert('Não cadastrou');</script>";
            print "<script>location.href='?page=listar-locacao';</script>";
        }
        break;

    case 'editar':
        $locacao = $_POST['data_locacao'];
        $devolucao = $_POST['data_devolucao'];
        $cliente = intval($_POST['cliente_id_cliente']);
        $filme = intval($_POST['filme_id_filme']);

        $sql = "UPDATE locacao 
                SET data_locacao='{$locacao}', 
                    data_devolucao='{$devolucao}', 
                    cliente_id_cliente='{$cliente}', 
                    filme_id_filme='{$filme}'  
                WHERE id_locacao=" . $_REQUEST['id_locacao'];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Editou com sucesso!');</script>";
            print "<script>location.href='?page=listar-locacao';</script>";
        } else {
            print "<script>alert('Não editou');</script>";
            print "<script>location.href='?page=listar-locacao';</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM locacao WHERE id_locacao=" . $_REQUEST['id_locacao'];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=listar-locacao';</script>";
        } else {
            print "<script>alert('Não excluiu');</script>";
            print "<script>location.href='?page=listar-locacao';</script>";
        }
        break;
}

?>