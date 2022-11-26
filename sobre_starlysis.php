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
            <h1 id="analise">Análise de <br>dados</h1>
            <p>A análise de dados é uma forma de observar os resultados para poder gerar informações e por conseguinte, conhecimento. O objetivo dessa empresa é expandir os horizontes desse processo tão importante no meio comecial mundial atual.</p>
        </section>
        <img src="./src/imgs/graphics.png" alt="gráfico" class="main1--grafico">
    </main>

    <main class="main1 m2">
    <img src="./src/imgs/equipe-conversando1.png" alt="equipe conversando" class="main2--equipe">
    <section class="main2--textos">
            <h1 id="quem-somos">Quem somos nós?</h1>
            <p>Nós somos uma empresa que visa o processo de compreensão dos dados, facilitando a mesma através da automatização de um processo pode acabar sendo muito complicado para pessoas que não tem conhecimento em programação, possibilitando uma agilidade maior e reduzindo o tempo gasto no processo, que poderá ser utilizado para tomada de decisões mais inteligentes.</p>
        </section>
    </main>

    <main class="main1 m3">
    <section class="main2--textos">
            <h1 id="nossa-historia">Nossa história</h1>
            <p>Nós somos uma empresa que visa o processo de compreensão dos dados, facilitando a mesma através da automatização de um processo pode acabar sendo muito complicado para pessoas que não tem conhecimento em programação, possibilitando uma agilidade maior e reduzindo o tempo gasto no processo, que poderá ser utilizado para tomada de decisões mais inteligentes.</p>
        </section>
    </main>
</body>
    <script src="./src/scripts/script_pagprincipal.js"></script>
</html>