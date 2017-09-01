<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <!-- Compatibilidade -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NegociaShop - Consultar</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Compatibilidade -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav>

      <div class="container">
        <div class="col-xs-3 barra-lateral">

            <a href="index.php"><img src="img/negociashopLogo.png" id="img-logo"></a>
            <div id="menu" class="menu-lateral">
              <div id="logotipo"><a href="index.php">NegociaShop</a></div>
              <a href="index.php" id="inicio">Início</a>
              <a href="cadastrar-mercadoria.php">Cadastrar Mercadoria</a>
              <a href="consultar-mercadoria.php">Consultar Mercadoria</a>
            </div>

          <footer id="rodape">
            @Matheus Macedo to Valemobi
          </footer>
        </div>
      </div>
      
    </nav>

    <header id="cabecalho">
      Consultar Mercadoria
    </header>

    <section id="pesquisa">

      <div class="container">  

        <div class="row">

          <div class="col-md-5">
          
            <form method="post" action="resultado-mercadoria.php">

              <div class="form-group">
                <label for="pesquisa-mercadoria">Digite o nome da mercadoria:</label>
                <input type="text" id="pesquisa-mercadoria" class="form-control" name="pesquisa-mercadoria">
              </div>

                <input type="submit" id="pesquisar" value="Pesquisar" class="btn btn-primary" name="pesquisar-mercadoria">

            </form>
          </div>

        </div>

      </div>

    </section>
   

    <!--Bootstrap-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>