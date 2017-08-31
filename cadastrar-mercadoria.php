<?php

$codigoMercadoria = $_POST['codigo-mercadoria'];
$tipoMercadoria = $_POST['tipo-mercadoria'];
$nomeMercadoria = $_POST['nome-mercadoria'];
$quantidadeMercadoria = $_POST['quantidade-mercadoria'];
$precoMercadoria = $_POST['preco-mercadoria'];
$tipoNegocio = $_POST['tipo-negocio'];

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'valemobi';

$connect = new mysqli($servidor, $usuario, $senha, $banco);
$inserir = ("INSERT INTO mercadoria(codigo_mercadoria, tipo_mercadoria, nome_mercadoria,
							quantidade_mercadoria, preco_mercadoria, tipo_negocio)
			VALUES('$codigoMercadoria','$tipoMercadoria', '$nomeMercadoria', '$quantidadeMercadoria',
					'$precoMercadoria', '$tipoNegocio')");
$sql = mysqli->query($inserir);


?>