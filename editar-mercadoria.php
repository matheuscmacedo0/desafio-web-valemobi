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
	<?php
		include 'conexao.php';

		$id = $_GET['id'];
		
		$query = ("SELECT * FROM mercadoria WHERE codigo_mercadoria = $id");
		$mysqli = mysqli_query($conexao,$query);
		$linha = mysqli_fetch_array($mysqli);
	?>
    
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

    <header id="cabecalho">
      Editar Mercadoria
    </header>

    <section id="formulario">
      
      <div class="container">

        <div class="row">
          
          <div class="col-md-5">

            <form method="post" action="salvar-alteracao.php">

              <div class="form-group">
                <label for="codigo-mercadoria">Código da Mercadoria</label>
                <input type="text" id="codigo-mercadoria" class="form-control" name="codigo-mercadoria" 
                		value="<?php echo $linha['codigo_mercadoria']?>">
              </div>

              <div class="form-group">
               <label for="tipo-mercadoria">Tipo da Mercadoria</label>
                <input type="text" id="tipo-mercadoria" class="form-control" name="tipo-mercadoria"
                value="<?php echo $linha['tipo_mercadoria']?>">
              </div>

              <div class="form-group">
                <label for="nome-mercadoria">Nome da Mercadoria</label>
                <input type="text" id="nome-mercadoria" class="form-control" name="nome-mercadoria"
                value="<?php echo $linha['nome_mercadoria']?>">
              </div>

              <div class="form-group">
                <label for="quantidade-mercadoria">Quantidade</label>
                <input type="number" id="quantidade-mercadoria" min="1" max="99" step="1" class="form-control" name="quantidade-mercadoria" value="<?php echo $linha['quantidade_mercadoria']?>">
              </div>

              <div class="form-group">
                <label for="preco-mercadoria">Preço</label>
                <input type="text" id="preco-mercadoria" class="form-control" name="preco-mercadoria"
                value="<?php echo $linha['preco_mercadoria']?>">
              </div>

              <div class="form-group">
                <label for="tipo-negocio">Tipo do Negócio</label>
                <input type="text" id="tipo-negocio" class="form-control" name="tipo-negocio"
                value="<?php echo $linha['tipo_negocio']?>">
              </div>

              <br>

              <input type="submit" id="salvar" value="Salvar" class="btn btn-primary" name="saçvar"
              onclick="return confirm('Deseja atualizar o registro?')">
            </form>
          </div>

        </div>
        
      </div>

    </section>


    <!--Bootstrap-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>