<?php
	include_once('conexao.php');
	//criando o objeto mysql e conectando ao banco de dados
	$mysql = new BancodeDados();
	$mysql->conecta();
	
	$codigo = $_POST['codigo'];
	if( $_FILES['arquivo'] ) { 
		$dir = './imagens/'; 
	
		$tmpName = $_FILES['arquivo']['tmp_name']; 
		$name = $_FILES['arquivo']['name']; 
		
		// move_uploaded_file
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { 	
				$sqlupdate =  "update tabelaimg set imagem='$name' where codigo=$codigo";
				// executando instru��o SQL atrav�s do m�todo sqlstring()
				$resultado = $mysql->sqlstring($sqlupdate,"ALTERA��O IMAGEM");	
				echo '<br><br><input type="button" onclick="window.location='."'imagem.php'".';" value="Voltar"><br><br>';
		} else {		
			// direciona para a p�gina de erro qdo ocorre erro no move_uploaded_file
			header('Location: erro.php'); 			
		}
		
	} else {
		// direciona para a p�gina de erro qdo n�o seleciona o arquivo
		header('Location: erro.php'); 
	}
?>


