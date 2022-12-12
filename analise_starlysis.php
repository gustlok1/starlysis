<?php
    require("header.php");
    require("footer.php");
    if(!(isset($_SESSION['email']))){
        header('Location:login_starlysis.php');

    }    
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/formatacao.css">
    <link rel="stylesheet" href="src/css/footer.css">
    <link rel="stylesheet" href="src/css/style_pagprincipal.css">
    <link rel="stylesheet" href="src/css/style_paganalise.css">
    <link rel="icon" href="src/imgs/isotipo.png">
    
    <title>Página de Análise - STARLYSIS</title>
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
    


    <!-- Projetos ############################################################################## -->
    <main class='main'>
        <?php
         require('conexao.php');

         $banco = new BancodeDados();
         $banco->conecta();

         //SELECT 1
     //    $email =    $_SESSION['email'];
     //    $sqlselect =  "SELECT * FROM usuarios WHERE email='$email'";
     //    $sql_query = $banco->sqlquery($sqlselect,"index.php");
//
     //    /* 
     //    $num = mysqli_num_rows($resultado);
     //    $dados = mysqli_fetch_array($resultado);
     //    */
     //    $dados = mysqli_fetch_array($sql_query);
     //    $id_usuario = $dados['id_usuario'];

         $id_usuario = $_SESSION['usuario'];

         //SELECT 2
         $sqlselectP = "SELECT * FROM projetos WHERE id_usuario='$id_usuario'";
         $sql_query2 = $banco->sqlquery($sqlselectP,"index.php");
         $num = mysqli_num_rows($sql_query2);
         
         ?>
        <div class="main--recentes"><h1 class="main--titulo">
            <?php
                if($num <= 0){
                    echo "Sem projetos criados";
                }
                else{
                    echo "Recentes";
                }
            ?>
        </h1></div>
        <section class="main--projetos" >
            <?php
                if($num > 0){
                    while($dados2 = mysqli_fetch_array($sql_query2)){
                        echo "<a href='projeto.php?id=".base64_encode($dados2['id_projeto'])."'>
                        <section class='main--projetos--item'>
                            <div class='main--projetos--titulo_data'><p class='main--projetos--titulo'><p class='main--projetos--tituloUnico'>".$dados2['titulo']." - <p>".$dados2['data_upload']."</p></div>
                            <img src='./src/imgs/grapich2.png' alt='imagens-graficos'>
                            <div class='main--projetos--descricao'>
                            ".$dados2['descricao']."
                            </div>
                        </section>
                    </a>";
                    }
                }

            ?>
        <!--<a href='projeto.php?id=#'>
                <section class='main--projetos--item'>
                    <div class='main--projetos--titulo_data'><p class='main--projetos--titulo'><p class='main--projetos--tituloUnico'>titulo - <p>dd/mm/yyyy</p></div>
                    <img src='./src/imgs/grapich2.png' alt='imagens-graficos'>
                    <div class='main--projetos--descricao'>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe quae vitae natus at labore obcaecati harum quo soluta impedit mollitia omnis consectetur, commodi consequatur veniam itaque incidunt quaerat sit numquam!
                    </div>
                </section>
            </a> -->
    </main>
    <?php
        echo $footer;
        ?>
</body>
<script src="./src/scripts/script_pagprincipal.js"></script>
<script src="./src/scripts/script_paganalise.js"></script>
</html>
