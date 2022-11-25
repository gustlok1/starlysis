<?php
    session_start();
    if(isset($_SESSION["usuario"])){
        header('Location: index.php');
    }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/formatacao.css">
    <link rel="stylesheet" href="./src/css/style_pagcadastro.css">
    <link rel="stylesheet" href="./src/css/style_paglogin.css">
    <title>STARLYSIS - Login</title>
</head>
<body>
    <section class="background">                    
        <img src="./src/imgs/img-cad1.png" alt="ondinha1" class="ondinha1"> 
        <section class="cadastro">
            <img src="./src/imgs/logo.png" alt="logo starlysis" class="logo">
            <ul class="cadastro--itens">
                <form action="login.php" method="post">
                
                <li class="cadastro--input">
                    <h1>Email <span class="c-vermelho bold">*</span></h1>
                    <input class="input" type="text" name="email" id="input-email" required placeholder="Exemplo@gmail.com...">
                    <span class="input__efeito"></span>
                </li>
                <li class="cadastro--input">
                    <h1>Senha <span class="c-vermelho bold">*</span></h1>
                    <input class="input" type="password" name="senha" id="input-senha" required placeholder="Digite sua senha...">
                    <span class="input__efeito"></span>
                </li>
                <input type="submit" value="enviar" style="display:none;" id="enviar">
                </form>
            </ul>

            <a href="./cadastro_starlysis.html" class="cadastro--link">Não tem conta? Clique aqui para se cadastrar</a>
            <a href="./suporte_starlysis.html" class="cadastro--link">Precisa de ajuda? Clique aqui para suporte</a>
            <div id="cadastro--submit"><label for="enviar"><img src="./src/imgs/finalizar.png" alt="avancar"></label></div>
            
        </section>
    </section>
</body>

</html>