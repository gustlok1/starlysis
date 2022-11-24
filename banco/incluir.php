<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> CRUD - PHP com mysqli (POO) </title>
</head>
<body>
	<h3> CRUD - PHP com mysqli (POO) - Inclusão</h3>
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

		// criando a linha de INSERT
		$sqlinsert =  "insert into tabelaimg (codigo, produto, descricao, data, valor, imagem) values ($codigo, '$produto', '$descricao', '$data', $valor, '')";
		
		// executando instrução SQL através do método sqlstring()
		$resultado = $mysql->sqlstring($sqlinsert,"INCLUSÃO");
	?>
	<br><br>
	<input type='button' onclick="window.location='index.php';" value="Voltar">
</body>
</html>

