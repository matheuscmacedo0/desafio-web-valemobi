<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <!-- Compatibilidade -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icone -->
    <link rel="icon" href="img/negociashop.ico">
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
      Bem-vindo a NegociaShop
    </header>

    
    <section id="tabela-pesquisa">
    
      <div class="container">
      
        <div class="conteudo">
          Confira as últimas novidades:
        </div>    

        <div class="row">

          <div class="col-md-6">

            <?php
              include 'conexao.php';

              // Seleciona os últimos 5 registros
              $query = ("SELECT * FROM mercadoria ORDER BY codigo_mercadoria DESC LIMIT 5");
              $mysqli = mysqli_query($conexao,$query);
              // Conta as linhas do resultado
              $row = mysqli_num_rows($mysqli);
              // Definindo IDs dinâmicos para as TDs do Código Mercadoria
              $vetorID = array();
              $aux = 0;
              // Criando cabeçalho da tabela
              echo '<table class="table table-striped table-hover"><thead><tr><th>Codigo</th><th>Tipo</th><th>Nome</th>
                  <th>Quantidade</th><th>Preco</th><th>Negocio</th></tr></thead>';

              
              // Se houver resultado, exiba-o
              if ($row > 0) {
                while ($linha = mysqli_fetch_array($mysqli)) {
                  $aux++;
                  $codigoMercadoria = $linha['codigo_mercadoria'];
                  $vetorID[$aux] = $codigoMercadoria;
                  $tipoMercadoria = $linha['tipo_mercadoria'];
                  $nomeMercadoria = $linha['nome_mercadoria'];
                  $quantidadeMercadoria = $linha['quantidade_mercadoria'];
                  $precoMercadoria = $linha['preco_mercadoria'];
                  $tipoNegocio = $linha['tipo_negocio'];

                  echo "<tbody><tr><td align='center' id='".$vetorID[$aux]."'>".$codigoMercadoria."</td>";
                  
                  echo "<td>".$tipoMercadoria."</td>";
                  echo "<td>".$nomeMercadoria."</td>";
                  echo "<td align='center'>".$quantidadeMercadoria."</td>";
                  echo "<td>".$precoMercadoria."</td>";
                  echo "<td>".$tipoNegocio."</td>";
                  echo "<td><a href='editar-mercadoria.php?id=".$vetorID[$aux]."' class='glyphicon glyphicon-pencil'>
                        </a></td>";
                  echo "<td><a href='remover-mercadoria.php?id=".$vetorID[$aux]."' class='glyphicon glyphicon-remove'
                        onclick='return confirm('Tem certeza que deseja remover esta mercadoria?')'>
                        </a></td></tr>";
                  
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