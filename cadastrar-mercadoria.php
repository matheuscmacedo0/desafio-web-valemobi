<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <!-- Compatibilidade -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icone -->
    <link rel="icon" href="img/negociashop.ico">
    
    <title>Cadastrar</title>
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
      Cadastrar Mercadoria
    </header>

    <section id="formulario">
      
      <div class="container">

        <div class="row">

            <form method="post" action="cadastro-mercadoria.php" class="form-horizontal">

              <div class="form-group">
                <label for="codigo-mercadoria" class="col-sm-2">Código da Mercadoria:</label>
                <div class="col-sm-2">
                <input type="text" id="codigo-mercadoria" class="form-control" name="codigo-mercadoria" placeholder="Digite o Código">
                </div>
              </div>

              <div class="form-group">
                <label for="tipo-mercadoria" class="col-sm-2">Tipo da Mercadoria:</label>
                <div class="col-sm-3">
                  <select class="form-control selectpicker" id="tipo-mercadoria" name="tipo-mercadoria">
                    <option>---------- Selecione ----------</option>
                    <option value="Brinquedos">Brinquedos</option>
                    <option value="Eletrônicos">Eletrônicos</option>
                    <option value="Eletrodomésticos">Eletrodomésticos</option>
                    <option value="Jogos">Jogos</option>
                    <option value="Livros">Livros</option>
                    <option value="Video Games">Video Games</option>
                    <option value="Outros">Outros</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="nome-mercadoria" class="col-sm-2">Nome da Mercadoria:</label>
                <div class="col-sm-4">
                  <input type="text" id="nome-mercadoria" class="form-control" name="nome-mercadoria" placeholder="Digite o Nome da Mercadoria">
                </div>
              </div>

              <div class="form-group">
                <label for="quantidade-mercadoria" class="col-sm-2">Quantidade:</label>
                <div class="col-sm-2">
                  <input type="number" id="quantidade-mercadoria" min="1" max="99" step="1" class="form-control" name="quantidade-mercadoria" placeholder="Digite a Quantidade de Mercadoria">
                </div>
              </div>

              <div class="form-group">
                <label for="preco-mercadoria" class="col-sm-2">Preço:</label>
                <div class="col-sm-2 input-group">
                  <div class="input-group-addon">R$</div>
                  <input type="text" id="preco-mercadoria" class="form-control" name="preco-mercadoria" placeholder="Ex: 60.00">
                </div>
              </div>

              <div class="form-group">
                <label for="tipo-negocio" class="col-sm-2">Tipo do Negócio:</label>
                <div class="col-sm-2">
                  <select class="form-control selectpicker" id="tipo-negocio" name="tipo-negocio">
                    <option>Compra</option>
                    <option>Venda</option>
                  </select>
                </div>
              </div>

              <br>

              <div class="col-sm-6">
                <input type="submit" id="cadastrar" value="Cadastrar" class="btn btn-primary btn-lg cadastrar-salvar" name="cadastrar">
              </div>
            </form>
          
        </div>
        
      </div>

    </section>


    <!--Bootstrap-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>