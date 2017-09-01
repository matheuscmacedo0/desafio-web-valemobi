<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <!-- Compatibilidade -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Editar</title>
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

        <div class="col-md-4">
          <div id="menu" class="menu-lateral">
            <div id="logotipo">NegociaShop</div>
            <a href="index.html">Início</a>
            <a href="cadastrar-mercadoria.html">Cadastrar Mercadoria</a>
            <a href="consultar-mercadoria.html">Consultar Mercadoria</a>
          </div>
        </div>

      </div>
      
    </nav> 
	<?php
	include 'conexao.php';

		$id = $_GET['id'];
		
		$query = ("DELETE from mercadoria WHERE codigo_mercadoria = '$id'") or die(mysqli_error());

		$mysqli = mysqli_query($conexao,$query);

		echo "<span id='cabecalho'>A mercadoria foi removida com sucesso!</span>";
		
	?>


    <!--Bootstrap-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

