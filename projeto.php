<?php
    require("header.php");
    require("footer.php");
    require("conexao.php");

    if(!(isset($_SESSION['email']))){
        header('Location:login_starlysis.php');
    }

    if(isset($_POST['valor'])){
        $banco = new BancodeDados();
        $banco->conecta();
        $id = base64_decode($_GET['id']);
        $sqldelete =  "delete from projetos where id_projeto=".$id.";";
        $banco->sqlstring($sqldelete,"delete");                
        $banco->fechar();
        header('Location:analise_starlysis.php');
        echo "enviado";
    }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style_pagprincipal.css">
    <link rel="icon" href="src/imgs/isotipo.png">
    <link rel="stylesheet" href="src/css/formatacao.css">
    <link rel="stylesheet" href="src/css/style_paganalise.css">
    <link rel="stylesheet" href="src/css/style_pagprojeto.css">
    <link rel="stylesheet" href="src/css/footer.css">
    <title>Página de Suporte - STARLYSIS</title>
</head>
<body>
    <?php
        echo $cabecalho;
    ?>
    <!-- Barra de navegação############################################################################ -->
    <section class="sec-navegar">
        <a href="tutorial.html">
            <div class="sec-navegar--item tutorial">
                <img src="./src/imgs/ajuda.png" alt="ajuda">
                <p>Tutorial</p>
            </div>
        </a>
         <span class='sec-navegar--span'></span>

        <div class="sec-navegar--item novo" onclick="toggleUpload()">
           <img src="./src/imgs/novo.png" alt="novo-projeto">
           <p>Novo</p>
        </div>

        <span class='sec-navegar--span'></span>

        <a href="suporte_starlysis.php">
            <div class="sec-navegar--item suporte">
               <img src="./src/imgs/mic-suporte.png" alt="ajuda">
               <p>Suporte</p>
            </div>
        </a>
    </section>

    <!-- pop-up de upload############################################################################ -->
    <section class="popup">
        <div class="popup--background"></div>        
        <section class="upload">
            <img src="./src/imgs/close-black.png" onclick="toggleUpload()" class="upload--cancelar">
            <form method="post" action="upload_base.php" enctype="multipart/form-data" class="upload--form">
                <h1 class="upload--titulo">Título</h1>
                <input type="text" name="titulo" id="titulo-projeto" required placeholder="Titulo do projeto...">
                <h1 class="upload--descricao">Descrição</h1>
                <textarea name="area" id="textarea" cols="30" rows="5" style="outline=none;" required></textarea>
                <div class="upload--div">    
                    <label class="upload--label" for="arquivo">Adicionar arquivo</label>
                    <input class="upload--file" type="file" name="base" id="arquivo" require>
                </div>
                <input class="upload--submit header--azul" type="submit" value="Finalizar">
            </form>
        </section>
    </section>

    <main class="main">    
        <?php
            // verifica 
            $banco = new BancodeDados();
            $banco->conecta();

            $id = base64_decode($_GET['id']);

            $id_usuario = $_SESSION['usuario'];
            // select
            $sqlconsulta =  "SELECT * FROM projetos WHERE id_projeto = '$id' AND id_usuario='$id_usuario'";

            $query = $banco->sqlquery($sqlconsulta,"analise_starlysis.php");

            if(mysqli_num_rows($query) <= 0){
                echo "<p>Error, não encontrado</p>";
            }
            else{
                // echo "<p>Consulta bem sucessida</p>";
                $dados = mysqli_fetch_array($query);
                echo '

             <h1 class="main--titulo">'.$dados['titulo'].'</h1>

                <a href="./src/bases/'.$dados['nome_arquivo'].'">
                    <section class="main--arquivo">
                        <div class="main--arquivo--logo"><img src="./src/imgs/logo-csv.png" alt="arquivo csv"></div>
                        <div class="main--arquivo--nome_arquivo">'.$dados['nome_arquivo'].'</div>
                    </section>
                </a>
                

                <form class="forms--excluir" action="./projeto.php?id=?'.$_GET['id'].'" method="post">
                    <p class="vermelho">Excluir projeto</p>
                    <input type="text" name="valor" id="true" value="e">
                    <input type="submit" id="submit" value="X">
                </form>

                
                <section class="main--informacoes">
                    <div class="main--informacoes--descricao"><p><span class="bold">Descrição: </span>'.$dados['descricao'].'</p></div>
                    <div class="main--informacoes--data"><p><span class="bold">Data: </span>'.$dados['data_upload'].'</p></div>
                </section>
                <h1 class="main--titulo retorios-titulo">Relatórios gerados</h1>
        
                <section class="main--graficos">
                    <div class="main--graficos--relatorio">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum neque tempore sapiente quos similique aut provident esse laboriosam aperiam maiores dolo</p>
                        <img src="./src/imgs/grapich2.png" alt="grafico gerado">
                    </div>
                </section>
                
                <section class="main--graficos">
                    <div class="main--graficos--relatorio">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum neque tempore sapiente quos similique aut provident esse laboriosam aperiam maiores dolo</p>
                        <img src="./src/imgs/grapich2.png" alt="grafico gerado">
                    </div>
                </section>';
            }
            
        ?>
    </main>
    <?php
        echo $footer;
    ?>
</body>
    <script src="./src/scripts/script_pagprincipal.js"></script>
    <script src="./src/scripts/script_paganalise.js"></script>
</html>