<?php
    include("conexao.php");
    
    $banco = new BancodeDados();
    $banco->conecta();

    session_start();

    if(isset($_POST)){
        try{
            //variáveis
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sqlselect =  "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
            $sql_query = $banco->sqlquery($sqlselect,"login_starlysis.php");

            /* 
			$num = mysqli_num_rows($resultado);
			$dados = mysqli_fetch_array($resultado);
            */
			$dados = mysqli_fetch_array($sql_query);
            
            if(mysqli_num_rows($sql_query) == 1){
            $_SESSION['email'] = $email;
            $_SESSION['senha']= $senha;
            $_SESSION['usuario']= $dados['id_usuario'];
            $_SESSION['nome']= $dados['nome_usuario'];
            $_SESSION['tipo']= $dados['tipo_conta'];
            header('Location:index.php');      
            }
            else{
                echo "Não existe conta associada à esses dados<BR>".'<input type="button" onclick="window.location='."'login_starlysis.php'".';" value="Voltar"><br><br>';
			    die('<b>Query Inválida:</b>' . mysqli_error($banco->con)); 
            }
        }
        catch(Exception $e){
            echo "Erro capturado: ". $e->getMessage(). "\n";
        }        
    }
?>