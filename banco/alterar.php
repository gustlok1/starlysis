<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> CRUD - PHP com mysqli (POO) </title>
</head>
<body>
<h3> CRUD - PHP com mysqli (POO) - Alterar</h3>
<?php
	include_once('conexao.php');
	//criando o objeto mysql e conectando ao banco de dados
	$mysql = new BancodeDados();
	$mysql->conecta();
			
	// recuperando 
	$codigo = $_POST['codigo'];
	$produto = $_POST['produto'];	
	$descricao = $_POST['descricao'];	
	$data = $_POST['data'];	
	$valor = $_POST['valor'];	

	// criando a linha do  UPDATE
	$sqlupdate =  "update tabelaimg set produto='$produto', descricao='$descricao',data='$data',valor=$valor where codigo=$codigo";

	// executando instrução SQL através do método sqlstring()
	$resultado = $mysql->sqlstring($sqlupdate,"ALTERAÇÃO");
?>
<br><br>
	<input type='button' onclick="window.location='alteracao.php';" value="Voltar">	
</body>
</html>

