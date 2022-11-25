<?php
    require("header.php")
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style_pagprincipal.css">
    <link rel="stylesheet" href="src/css/formatacao.css">
    <title>Página Principal - STARLYSIS</title>
</head>
<body>
    <?php
        echo $cabecalho;
    ?>

    <main class="main">        
        <section class="main--textos center">
            <h1 class="main--titulo"><span class="c-laranja bold">Analisamos <br> </span> os seus dados e <span class="c-laranja bold"><br>alavancamos<br></span> o seu negócio</h1>
            <p class="main--texto">A análise de dados é um processo de inspeção, limpeza, transformação e modelagem de dados com o objetivo 
                de descobrir informações úteis, informar conclusões e apoiar a tomada de decisões. A análise de dados tem múltiplas facetas 
                e abordagens, abrangendo diversas técnicas sob uma variedade de nomes, e é usada em diferentes domínios dos negócios, 
                ciências e ciências sociais. No mundo dos negócios de hoje, a análise de dados desempenha um papel tornando a tomada de 
                decisões mais científicas e ajudando as empresas a operar com mais eficácia.
            </p>
            <a href="./cadastro_starlysis.php"><button class="main--botao">Começar Agora!</button></a>
        </section>
    </main>

    <main class="main2">
        <img src="" alt="">
        <section></section>
    </main>
</body>

<script src="./src/scripts/script_pagprincipal.js"></script>
</html>