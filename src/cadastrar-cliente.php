/*
Arquivo: cadastrar-cliente.php
Local original: /mnt/data/avaliacao_repositorio/original/cadastrar-cliente.php
Resumo: Versão do arquivo preparada para inclusão no repositório. 
       Este arquivo contém um cabeçalho de documentação gerada automaticamente.
Por favor revise os comentários e adicione detalhes específicos do projeto.
*/

<h1>Cadastrar Cliente</h1>
<form action="?page=salvar-cliente" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_cliente" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>CPF
            <input type="text" name="cpf_cliente" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Telefone
            <input type="tel" name="telefone_cliente" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>E-mail
            <input type="email" name="email_cliente" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Endereço
            <input type="text" name="endereco_cliente" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>