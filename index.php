<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="css/bootstrap.min.css" real="stylesheet">

    <title>Cadastro!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo veiculo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar veiculos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class = "container">
      <div class="row">
        <div class="col mt-5">
          <?php
              include("config.php");
            switch(@$_REQUEST["page"]){
              case"novo":
              include("novo-automovel.php");
            break;
            case"listar":
              include("listar-automoveis.php");
            break;
            case "salvar":
              include("salvar-automovel.php");
            break;
            case "editar":
              include("editar-automovel.php");
            break;
            default:
            }
          ?>
          </div>
        </div>
     </div> 
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>