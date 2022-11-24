<?php
    session_start();
    if(isset($_SESSION["usuario"])){
        $nome = $_SESSION['nome'];
        $usuario = $_SESSION['usuario'];
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style_pagprincipal.css">
    <link rel="stylesheet" href="./src/css/formatacao.css">
    <title>STARLYSIS - Página Principal</title>
</head>
<body>
    <section class="menu">
        <header class="header center">
            <a href="index.html"><img src="./src/imgs/logo.png" alt="logo - starlysis" class="header--logo"></a>
            <img src="./src/imgs/bars.svg" alt="menu" class="menu--bars open" onclick="sideBar()">
            <section class="menu--section">
                <ul class="header--sidebar">
                    <img src="./src/imgs/close.png" alt="menu" class="menu--bars close" onclick="sideBar()">
                    <li class="header--azul"><a href="#" <?php echo "style=display:flex;";?>>Análise</a></li>
                    <li><a href="#">Ajuda</a></li>
                    <li><a href="#">Sobre</a></li>
                    <p class="header--azul" <?php echo "style=display:none;";?> ><a href="./cadastro_starlysis.php">Cadastre-se</a></p>
                    <li <?php echo 'onclick="toggleMenu()"'.'>'.$nome;?><a class="header--login" href="./login_starlysis.html"><?php }else{echo "Entrar";}?></a></li>
                    <li><a class="header--login" href="./login_starlysis.html" onclick="toggleMenu()"><img src="./src/imgs/user.png" alt="usuario" class="header--user"></a></li>
                    <div class="header--div_login">
                        <div class="header--div--login">
                            <div class="header--div_seta"></div>
                            <form action="sair_sessao.php" method="post" style="display:none;"><input value="sair"type="text" name="sair"><input type="submit" value="enviar" id="submit"></form>
                            <div class="header--div_links">
                                <p>Deseja sair?</p>
                                <label for="submit" style="cursor:pointer;"><p>Sim</p></label>
                                <p style="cursor:pointer;" onclick="toggleMenu()">Não</p>
                            </div>
                        </div>
                    </div>
                </ul>

            </section>
        </header>
    </section>

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