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


      <?php
    		include 'conexao.php';

    		$codigoMercadoria = $_POST['codigo-mercadoria'];
    		$tipoMercadoria = $_POST['tipo-mercadoria'];
    		$nomeMercadoria = $_POST['nome-mercadoria'];
    		$quantidadeMercadoria = $_POST['quantidade-mercadoria'];
    		$precoMercadoria = $_POST['preco-mercadoria'];
    		$tipoNegocio = $_POST['tipo-negocio'];

    		$query = ("INSERT INTO mercadoria(codigo_mercadoria, tipo_mercadoria, nome_mercadoria,
    									quantidade_mercadoria, preco_mercadoria, tipo_negocio)
    					VALUES('$codigoMercadoria','$tipoMercadoria', '$nomeMercadoria', '$quantidadeMercadoria',
    							'$precoMercadoria', '$tipoNegocio')");

    		$mysqli = mysqli_query($conexao,$query);

    		echo "<span id='cabecalho'>Mercadoria cadastrada com sucesso!</span>";

        mysqli_close($conexao);


  	?>
   

    <!--Bootstrap-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>