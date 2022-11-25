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
    <title>STARLYSIS - Página Principal</title>
</head>
<body>
    <?php
        echo $cabecalho;
    ?>

    <main class="main">        
        <section class="main--textos center">
            <h1 class="main--titulo"><span class="c-laranja bold">Analisamos <br> </span> os seus dados e <span class="c-laranja bold"><br>alavancamos<br></span> o seu negócio</h1>
            <p class="main--texto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi iusto vero praesentium atque adipisci numquam possimus. 
                Molestias iure saepe ipsum deleniti accusantium nam, libero vero odio pariatur officiis excepturi dignissimos.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias ea non officia quod doloremque dolores quisquam, eius rerum obcaecati magni saepe ratione itaque, a facere ab modi odio incidunt quos.
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