/*
Arquivo: cadastrar-filme.php
Local original: /mnt/data/avaliacao_repositorio/original/cadastrar-filme.php
Resumo: Versão do arquivo preparada para inclusão no repositório. 
       Este arquivo contém um cabeçalho de documentação gerada automaticamente.
Por favor revise os comentários e adicione detalhes específicos do projeto.
*/

<h1>Cadastrar Filme</h1>
<form action="?page=salvar-filme" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Título do Filme
            <input type="text" name="titulo_filme" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Gênero
            <input type="text" name="genero_filme" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Ano
            <input type="date" name="ano_filme" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Classificação
            <input type="text" name="classificacao_filme" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>