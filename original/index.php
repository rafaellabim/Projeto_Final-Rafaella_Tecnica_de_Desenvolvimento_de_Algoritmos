<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Filmes.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Cliente
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-cliente">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-cliente">Listar</a></li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Filme
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-filme">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-filme">Listar</a></li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Locação
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-locacao">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-locacao">Listar</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <?php
                  include('config.php');
                    switch (@$_REQUEST['page']) {

                             // cliente
                        case 'cadastrar-cliente':
                            include("cadastrar-cliente.php");
                            break;
                        case 'listar-cliente':
                            include("listar-cliente.php");
                            break;
                        case 'editar-cliente':
                            include("editar-cliente.php");
                            break;
                        case 'salvar-cliente':
                            include("salvar-cliente.php");
                            break;

                             // filme
                        case 'cadastrar-filme':
                            include("cadastrar-filme.php");
                            break;
                        case 'listar-filme':
                            include("listar-filme.php");
                            break;
                        case 'editar-filme':
                            include("editar-filme.php");
                            break;
                        case 'salvar-filme':
                            include("salvar-filme.php");
                            break;

                             // locação
                        case 'cadastrar-locacao':
                            include("cadastrar-locacao.php");
                            break;
                        case 'listar-locacao':
                            include("listar-locacao.php");
                            break;
                        case 'editar-locacao':
                            include("editar-locacao.php");
                            break;
                        case 'salvar-locacao':
                            include("salvar-locacao.php");
                            break;

                            
                        default:
                            print("<h1>Seja bem vindo ao sistema da Filmes.com</h1");

                    }
                ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>