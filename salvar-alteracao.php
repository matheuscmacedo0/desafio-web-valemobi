<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <!-- Compatibilidade -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icone -->
    <link rel="icon" href="img/negociashop.ico">
    
    <title>Salvar</title>
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

    		$query = ("UPDATE mercadoria SET codigo_mercadoria = '$codigoMercadoria', tipo_mercadoria = '$tipoMercadoria',
    					nome_mercadoria = '$nomeMercadoria', quantidade_mercadoria = '$quantidadeMercadoria',
    					preco_mercadoria = '$precoMercadoria', tipo_mercadoria = '$tipoMercadoria' 
    					WHERE codigo_mercadoria = '$codigoMercadoria'") or die(mysqli_error());

    		$mysqli = mysqli_query($conexao,$query);

    		echo "<span id='cabecalho'>Alterações salvas com sucesso!</span>";

        
  		
  	?>


    <!--Bootstrap-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

