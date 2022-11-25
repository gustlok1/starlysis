<?php
    require('header.php');
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style_pagprincipal.css">
    <link rel="stylesheet" href="src/css/style_pagsobre.css">
    <link rel="stylesheet" href="src/css/formatacao.css">
    <title>STARLYSIS - Página Sobre Nós</title>
</head>
<body>
    <?php
        echo $cabecalho;
    ?>
    <main class="main1">
        <section class="main1--textos">
            <h1>ANÁLISE DE <br> DADOS</h1>
            <p>A análise de dados.</p>
        </section>
        <img src="./src/imgs/graphics.png" alt="gráfico" class="main1--grafico">
    </main>

    <main class="main1 m2">
    <section class="main1--textos">
            <h1>Quem somos nós?</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </section>
    </main>
</body>
    <script src="./src/scripts/script_pagprincipal.js"></script>
</html>