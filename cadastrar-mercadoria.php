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

	echo "<script>location.href'cadastrar-mercadoria.html';</script>";


?>