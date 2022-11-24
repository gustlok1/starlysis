<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> CRUD - PHP com mysqli (POO) </title>
</head>
<body>
	<h3> CRUD - PHP com mysqli (POO) - Incluir Imagem</h3>
	<?php
		include_once('conexao.php');
		//criando o objeto mysql e conectando ao banco de dados
		$mysql = new BancodeDados();
		$mysql->conecta();
		
		// recuperando 
		$codigo = $_POST['codigo'];

		// criando a linha do  SELECT
		$sqlconsulta =  "select * from tabelaimg where codigo = $codigo";
		
		$dados = $mysql->sqlquery($sqlconsulta,'consulta.php');

	?>
	<b>Código:</b> <input type="number"  value="<?php echo $dados['codigo']; ?>" readonly ><br><br>
	<b>Produto:</b> <input type="text"  maxlength='80' style="width:550px" value="<?php echo $dados['produto']; ?>" readonly ><br><br>
	<img src='imagens/
			<?php 
				if (empty($dados['imagem'])){
					echo 'SemImagem.png';
				}else{
					echo $dados['imagem'];
				}
			?> 'width='200px' height='200px'><br><br>
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<label for="arquivo">Arquivo:</label> <input type="file" name="arquivo" id="arquivo" />
				<input type='hidden' value="<?php echo $codigo; ?>" name="codigo">
				<br />
				<br />
				<input type="submit" value="Enviar" />
				<input type='button' onclick="window.location='imagem.php';" value="Voltar">
			</form>
</body>
</html>
