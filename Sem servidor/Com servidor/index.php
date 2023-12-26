<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConsoleScrols</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- icones -->
    <link rel="stylesheet" type="text/css" href="bootstrap-icons-1.11.2/font/bootstrap-icons.css">
    <!-- CSS do projeto -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- JavaScript Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-primary-color" id="navbar">
        <!-- espaço da Navbar -->
        <div class="container py-1">
            <a href="index.php" class="navbar-brand" class="nav-link active">
                <i class="bi bi-controller" class="nav-link active"></i>
                <span class="matrixBrand" class="nav-link active">ConsoleScrols</span>
            </a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse"
                data-bs-target="#navbar-items"
                aria-controls="navbar-items"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="bi bi-cpu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbar-items">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a href="index.php" class="nav-link active">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle matrix" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Marcas
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item matrix" href="?page=marca-listar">Listar</a></li>
                        <li><a class="dropdown-item matrix" href="?page=marca-cadastrar">Cadastrar</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle matrix" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Modelos
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item matrix" href="?page=modelos-listar" >Listar</a></li>
                        <li><a class="dropdown-item matrix" href="?page=modelos-cadastrar" >Cadastrar</a></li>
                      </ul>
                  </li>
              </ul>
            </div>
        </div>
      </nav>
      <div class="container py-4">
        <div class="row">
          <div class="col">
            <?php
                //conexão com o banco de dados
                include('PHP/config.php');
                //include das páginas
                switch (@$_REQUEST['page']) {
                  //marcas
                  case 'marca-listar':
                    include('PHP/marca-listar.php');
                    break;
                  case 'marca-cadastrar':
                    include('PHP/marca-cadastrar.php');
                    break;
                  case 'marca-editar':
                    include('PHP/marca-editar.php');
                    break;
                  case 'marca-salvar':
                    include('PHP/marca-salvar.php');
                    break;


                  //modelos
                  case 'modelos-listar':
                    include('PHP/modelos-listar.php');
                    break;
                  case 'modelos-cadastrar':
                    include('PHP/modelos-cadastrar.php');
                    break;
                  case 'modelos-editar':
                    include('PHP/modelos-editar.php');
                    break;
                  case 'modelos-salvar':
                    include('PHP/modelos-salvar.php');
                    break;
                    default:
                    print "<h1>Seja Bem-vindo</h1>";
                }
                ?>
          </div>
        </div>
      </div>
</body>

</html>