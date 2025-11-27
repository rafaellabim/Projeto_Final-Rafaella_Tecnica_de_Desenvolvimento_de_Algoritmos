# Descrição na Linguagem Algorítmica

Este documento descreve o funcionamento do sistema na linguagem algorítmica (português estruturado).

Programa SistemaCRUD
    Variáveis
        opcao : inteiro
        id : inteiro
        item : registro

    Início
        Enquanto opcao <> 5 Faça
            Escreva("1 - Criar | 2 - Listar | 3 - Atualizar | 4 - Apagar | 5 - Sair")
            Leia(opcao)
            Se opcao = 1 Então
                Chamar Criar()
            Senao Se opcao = 2 Então
                Chamar Listar()
            Senao Se opcao = 3 Então
                Chamar Atualizar()
            Senao Se opcao = 4 Então
                Chamar Apagar()
            FimSe
        FimEnquanto
    FimPrograma

Procedimento Criar()
    Escreva("Inserir dados do item:")
    Leia(item.campo1, item.campo2)
    // Validação e inserção no armazenamento
FimProcedimento

Procedimento Listar()
    // Percorrer armazenamento e exibir
FimProcedimento

Procedimento Atualizar()
    Escreva("Informe o id do item a atualizar:")
    Leia(id)
    // Atualizar registro
FimProcedimento

Procedimento Apagar()
    Escreva("Informe o id do item a apagar:")
    Leia(id)
    // Remover registro
FimProcedimento
