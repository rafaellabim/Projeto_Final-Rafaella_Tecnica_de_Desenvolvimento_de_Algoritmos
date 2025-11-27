# Fluxograma (Mermaid)

Abaixo está um fluxograma em Mermaid que representa um fluxo CRUD genérico.

```mermaid
flowchart TD
    Start([Início]) --> Menu{Menu}
    Menu --> |Criar| Criar[Formulário de Criação]
    Menu --> |Listar| Listar[Exibir lista]
    Menu --> |Atualizar| ReqUpdate[Selecionar item] --> Edit[Formulário de edição]
    Menu --> |Apagar| ReqDelete[Selecionar item] --> ConfirmDelete{Confirmar exclusão}
    Criar --> End
    Listar --> End
    Edit --> End
    ConfirmDelete --> End
    End([Fim])
```

Copie e cole o bloco acima em qualquer visualizador que suporte Mermaid (por exemplo, no GitHub `.md` ou em editores como VSCode com extensão).
