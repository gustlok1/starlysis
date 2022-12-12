<?php
    include("conexao.php");

    session_start();
    if(!(isset($_SESSION["email"]))){
        header('Location:login_starlysis.php');
    }


    // insert##############################################
    if(isset($_FILES['base'])){    
        if(isset($_FILES['error']))
            die("<p class=\"falha\">Falha no arquivo. Erro: ".$_FILES['error']."</p>");

        $banco = new BancodeDados();
        $banco->conecta();

        // if(TRUE)
        //     die("não sei");
        $titulo = $_POST['titulo'];
        $descricao = $_POST['area'];

        $arquivo = $_FILES['base'];
        $nomeArquivo = $arquivo['name'];
        $arquivoRenomeado = uniqid();
        $pasta = "src/bases/";
        $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

        if($extensao != "csv" && $extensao != "sql" && $extensao != "xlsx" && $extensao != "htm" && $extensao != "txt"){
            die("Tipo de arquivo inválido.");
            echo "ola mundo";
        }
        $check = move_uploaded_file($arquivo['tmp_name'],$pasta.$arquivoRenomeado.".".$extensao);

        if($check)
            echo "Arquivo enviado com sucesso: $arquivoRenomeado.$extensao";
        else{
            echo "<p class=\"falha\">Falha ao enviar o arquivo $arquivoRenomeado.$extensao</p>";
        }
        try{            

            $arquivoNovo = $arquivoRenomeado.".".$extensao;
            //select
            $email = $_SESSION['email'];
            $sqlselect =  "SELECT * FROM usuarios WHERE email='$email'";
            $sql_query = $banco->sqlquery($sqlselect,"cadastro_starlysis.html");

            /* 
			$num = mysqli_num_rows($resultado);
			$dados = mysqli_fetch_array($resultado);
            */
            $dados = mysqli_fetch_array($sql_query);
            $id_usuario = $dados['id_usuario'];
            echo $id_usuario;
            //insert
                $sqlinsert =  "insert into projetos (id_usuario,titulo,descricao,nome_arquivo) values ('$id_usuario', '$titulo', '$descricao', '$arquivoNovo')";
                $banco->sqlstring($sqlinsert,"cadastro");


                $sql_query2 = $banco->sqlquery($sqlselect,"cadastro_starlysis.html");
                $dados = mysqli_fetch_array($sql_query2);
                var_dump($dados);
                $_SESSION['usuario'] = $dados['id_usuario'];
                header('Location:analise_starlysis.php');

            }catch(Exception $e){
                echo "Erro capturado: ". $e->getMessage(). "\n";
            }  
        }
              
        else{
            echo "arquivo não recebido";
        }
?>
