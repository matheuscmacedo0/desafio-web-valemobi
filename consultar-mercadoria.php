<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <!-- Compatibilidade -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NegociaShop - Negociação de Mercadorias</title>
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
   
   <div class="container">
    <div class="col-md-4" id="cabecalho-consultado">
    	<header>
			Resultados para: <?php echo $_POST['pesquisa-mercadoria']?>
		</header>	
    </div>
    </div>
	

   	<section id="tabela-pesquisa">
   	
	   	<div class="container">

	   		<div class="row">

	   			<div class="col-md-6">

	   				
	   				
				   	<?php
						include 'conexao.php';

						$pesquisa = $_POST['pesquisa-mercadoria'];
						$query = ("SELECT * FROM mercadoria WHERE nome_mercadoria LIKE '%".$pesquisa."%' ");
						$mysqli = mysqli_query($conexao,$query);

						
						// $row = mysqli_num_row($mysqli)
						$row = mysqli_num_rows($mysqli);

						// Criando cabeçalho da tabela
						echo '<table class="table table-striped"><thead><tr><th>Codigo</th><th>Tipo</th><th>Nome</th>
								<th>Quantidade</th><th>Preco</th><th>Negocio</th></tr></thead>';

						// Se houver resultado, exiba-o
						if ($row > 0) {
							while ($linha = mysqli_fetch_array($mysqli)) {
								$codigoMercadoria = $linha['codigo_mercadoria'];
								$tipoMercadoria = $linha['tipo_mercadoria'];
								$nomeMercadoria = $linha['nome_mercadoria'];
								$quantidadeMercadoria = $linha['quantidade_mercadoria'];
								$precoMercadoria = $linha['preco_mercadoria'];
								$tipoNegocio = $linha['tipo_negocio'];

								echo "<tbody><tr><td align='center'>".$codigoMercadoria."</td>";
								echo "<td>".$tipoMercadoria."</td>";
								echo "<td>".$nomeMercadoria."</td>";
								echo "<td align='center'>".$quantidadeMercadoria."</td>";
								echo "<td>".$precoMercadoria."</td>";
								echo "<td>".$tipoNegocio."</td></tr>";
							}
						}else{
							echo "Nenhum resultado foi encontrado";
						}
						echo "</tbody</table>";

						mysqli_free_result($mysqli);
						mysqli_close($conexao);

					?>
				</div>
			</div>
	  	</div>
   </section>

    <!--Bootstrap-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>