/*
Arquivo: config.php
Local original: /mnt/data/avaliacao_repositorio/original/config.php
Resumo: Versão do arquivo preparada para inclusão no repositório. 
       Este arquivo contém um cabeçalho de documentação gerada automaticamente.
Por favor revise os comentários e adicione detalhes específicos do projeto.
*/

<?php

    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("BASE", "locadora");

    $conn = new MYSQLi(HOST, USER, PASS, BASE);
