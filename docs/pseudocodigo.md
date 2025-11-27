# Pseudocódigo do Projeto (modelo)

Este arquivo deve ser adaptado ao(s) algoritmo(s) do seu projeto. Abaixo está um modelo genérico para uma aplicação CRUD.

Algoritmo Principal
1. Iniciar aplicação
2. Enquanto usuário não encerrar:
    2.1 Exibir menu: [1] Criar, [2] Listar, [3] Atualizar, [4] Apagar, [5] Sair
    2.2 Ler opção
    2.3 Se opção = 1 então
        Chamar função Criar()
    2.4 Se opção = 2 então
        Chamar função Listar()
    2.5 Se opção = 3 então
        Chamar função Atualizar()
    2.6 Se opção = 4 então
        Chamar função Apagar()
    2.7 Se opção = 5 então
        Encerrar aplicação

Função Criar()
    Ler dados do item
    Validar dados
    Inserir dados na fonte (arquivo / BD)
    Exibir confirmação

Função Listar()
    Consultar todos os itens
    Exibir em formato tabular

Função Atualizar()
    Ler identificador do item
    Consultar item
    Ler novos dados
    Atualizar registro
    Exibir confirmação

Função Apagar()
    Ler identificador do item
    Remover registro
    Exibir confirmação
