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
    <link rel="stylesheet" href="src/css/footer.css">
    <title>Página Principal - STARLYSIS</title>
</head>
<body>
    <?php
        echo $cabecalho;
    ?>

    <main class="main">        
        <section class="main--textos center">
            <h1 class="main--titulo" id="analise"><span class="c-laranja bold">Analisamos <br> </span> os seus dados e <span class="c-laranja bold"><br>alavancamos<br></span> o seu negócio</h1>
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

    <footer class="footer">
        <ul class="footer--ul">
            <li class="footer--itens img"><a href="./index.php"><img src="./src/imgs/logo.png" alt="logo"></a></li>
            <li class="footer--itens index"><ul class="footer--itens--index">
                <li class="footer--itens--index--titulo"><a href="./index.php">Página Principal</a></li>
                <li><a href="./index.php#analise">Analise</a></li>
                <li><a href="./index.php#gerador">Gerador</a></li>
                <li><a href="./index.php#analise">Analise</a></li>
            </ul></li>

            <li class="footer--itens sobre"><ul class="footer--itens--sobre">
                <li class="footer--itens--sobre--titulo"><a href="./sobre_starlysis.php">Sobre nós</a></li>
                <li><a href="./sobre_starlysis.php#analise">Analise</a></li>
                <li><a href="./sobre_starlysis.php#quem-somos">Quem somos?</a></li>
                <li><a href="./sobre_starlysis.php#nossa-historia">Nossa história</a></li>
            </ul>
            </li>

            <li class="footer--itens suporte"><ul class="footer--itens--suporte">
                <li class="footer--itens--suporte--titulo"><a href="./suporte_starlysis.php">Suporte</a></li>
                <li><a href="./suporte_starlysis.php#">Mandar email</a></li>
            </ul>
            </li>
            <li class="footer--itens redes"><ul class="footer--itens--redes">
                <li><a href="https://twitter.com"><img src="./src/imgs/devicon-master/devicon-master/icons/twitter/twitter-original.html" alt="twitter"></a></li>
                <li><a href="./sobre_starlysis.php#quem-somos">Quem somos?</a></li>
                <li><a href="./sobre_starlysis.php#nossa-historia">Nossa história</a></li>
            </ul>
        </li>
        </ul>
    </footer>
</body>

<script src="./src/scripts/script_pagprincipal.js"></script>
</html>