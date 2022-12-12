<?php
    include("conexao.php");
    
    $banco = new BancodeDados();
    $banco->conecta();

    if(isset($_POST)){
        try{
            //variáveis
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha1'];
            $tipoConta = $_POST['tipo'];

            $sqlselect =  "SELECT * FROM usuarios WHERE email='$email'";
            $sql_query = $banco->sqlquery($sqlselect,"cadastro_starlysis.html");

            /* 
			$num = mysqli_num_rows($resultado);
			$dados = mysqli_fetch_array($resultado);
            */
            
            if(mysqli_num_rows($sql_query) > 0){
                echo "Esse email já existe, por favor, insira outro<BR>".'<input type="button" onclick="window.location='."'cadastro_starlysis.php'".';" value="Voltar"><br><br>';
			    die('<b>Query Inválida:</b>' . mysqli_error($banco->con));         
            }
            else{
            //insert
                $sqlinsert =  "insert into usuarios (nome_usuario, email, senha, tipo_conta) values ('$nome', '$email', '$senha', '$tipoConta')";
                $banco->sqlstring($sqlinsert,"cadastro");
                session_start();

                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                $_SESSION['nome'] = $nome;
                $_SESSION['tipo'] = $tipoConta;

                $sql_query2 = $banco->sqlquery($sqlselect,"cadastro_starlysis.html");
                $dados = mysqli_fetch_array($sql_query2);
                var_dump($dados);
                $_SESSION['usuario'] = $dados['id_usuario'];
                header('Location:index.php');

            }
        }
        catch(Exception $e){
            echo "Erro capturado: ". $e->getMessage(). "\n";
        }        
    }
?>