<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> CRUD - PHP com mysqli </title>
</head>
<body>
	<h3>CRUD - PHP com mysqli - Exclusão - Consulta do Produto</h3>
	<?php
		include_once('conexao.php');
		//criando o objeto mysql e conectando ao banco de dados
		$mysql = new BancodeDados();
		$mysql->conecta();
		
		// recuperando 
		$codigo = $_POST['codigo'];

		// criando a linha do  DELETE
		$sqldelete =  "delete from  tabelaimg where codigo = '$codigo' ";
		
		$resultado = $mysql->sqlstring($sqldelete,"EXCLUSãO");
	?>
	<br><br>
	<input type='button' onclick="window.location='exclusao.php';" value="Voltar">
	</body>
</html>
