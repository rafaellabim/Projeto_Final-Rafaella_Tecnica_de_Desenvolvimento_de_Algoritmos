<?php

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $titulo = $_POST['titulo_filme'];
        $genero = $_POST['genero_filme'];
        $ano = $_POST['ano_filme'];
        $classificacao = $_POST['classificacao_filme'];
        

        $sql = "INSERT INTO filme
        (titulo_filme, genero_filme, ano_filme, classificacao_filme) 
        VALUES ('{$titulo}', '{$genero}', '{$ano}', '{$classificacao}')";

        $res = $conn->query($sql);

        if($res==true){
            print"<script>alert('Cadastrou com sucesso');</script>";
            print"<script>location.href='?page=listar-filme';</script>";
        }
        else {
            print"<script>alert('Não cadastrou');</script>";
            print"<script>location.href='?page=listar-filme';</script>";
        }
        break;

    case 'editar':
        $titulo = $_POST['titulo_filme'];
        $genero = $_POST['genero_filme'];
        $ano = $_POST['ano_filme'];
        $classificacao = $_POST['classificacao_filme'];

        $sql = "UPDATE filme SET titulo_filme='{$titulo}', genero_filme='{$genero}', ano_filme='{$ano}', classificacao_filme='{$classificacao}' WHERE id_filme=".$_REQUEST['id_filme'];

        $res = $conn->query($sql);

        if($res == true){
            print"<script>alert('Editou com sucesso!');</script>";
            print "<script>location.href='?page=listar-filme';</script>";
        }else{
            print"<script>alert('Não editou');</script>";
            print"<script>location.href='?page=listar-filme';</script>";
        }
        break;
       

    case 'excluir':
        $sql = "DELETE FROM filme WHERE id_filme=".$_REQUEST['id_filme'];

        $res = $conn->query($sql);

        if($res == true){
            print"<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=listar-filme';</script>";
        }else{
            print"<script>alert('Não excluiu');</script>";
            print"<script>location.href='?page=listar-filme';</script>";
        }
        break;
       
}