<?php
	include 'conexao.php';

	$pesquisa = $_POST['pesquisa-mercadoria'];
	$query = ("SELECT * FROM mercadoria WHERE nome_mercadoria LIKE '%".$pesquisa."%' ");
	$mysqli = mysqli_query($conexao,$query);

	$row = 1;
	// $row = mysqli_num_row($mysqli);

	if ($row > 0) {
		while ($linha = mysqli_fetch_array($mysqli)) {
			$codigoMercadoria = $linha['codigo_mercadoria'];
			$tipoMercadoria = $linha['tipo_mercadoria'];
			$nomeMercadoria = $linha['nome_mercadoria'];
			$quantidadeMercadoria = $linha['quantidade_mercadoria'];
			$precoMercadoria = $linha['preco_mercadoria'];
			$tipoNegocio = $linha['tipo_negocio'];

			echo "<strong>Codigo da Mercadoria: </strong>".@$codigoMercadoria;
			echo "<br/><br/>";
			echo "<strong>Tipo da Mercadoria: </strong>".@$tipoMercadoria;
			echo "<br/><br/>";
			echo "<strong>Nome da Mercadoria: </strong>".@$nomeMercadoria;
			echo "<br/><br/>";
			echo "<strong>Quantidade: </strong>".@$quantidadeMercadoria;
			echo "<br/><br/>";
			echo "<strong>Preco da Mercadoria: </strong>".@$precoMercadoria;
			echo "<br/><br/>";
			echo "<strong>Tipo do Negocio: </strong>".@$tipoNegocio;
			echo "<br/><br/>";
		}
	}else{
		echo "Nenhum resultado foi encontrado";
	}

?>