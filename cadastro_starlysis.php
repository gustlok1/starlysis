<?php
    session_start();
    if(isset($_SESSION["email"])){
        header('Location:index.php');
    }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/formatacao.css">
    <link rel="stylesheet" href="./src/css/style_pagcadastro.css">
    <link rel="icon" href="src/imgs/isotipo.png">
    <title>Cadastro - STARLYSIS</title>
</head>
<body>
    <section class="background">                    
        <img src="./src/imgs/img-cad1.png" alt="ondinha1" class="ondinha1"> 
        <section class="cadastro">
            <img src="./src/imgs/logo.png" alt="logo starlysis" class="logo">
            <ul class="cadastro--itens">
                <form action="./cadastro.php" method="post">
                <li class="cadastro--input">
                    <h1>Nome <span class="c-vermelho bold">*</span></h1>
                    <input class="input" type="text" name="nome" id="input-nome" required placeholder="Digite aqui...">
                    <span class="input__efeito"></span>
                    <p class="texto1"></p>
                </li>                
                <li class="cadastro--input">
                    <h1>E-mail <span class="c-vermelho bold">*</span></h1>
                    <input class="input" type="text" name="email" id="input-email" required placeholder="Exemplo@gmail.com...">
                    <span class="input__efeito"></span>
                    <p class="texto2"></p>
                </li>
                <li class="cadastro--input">
                    <h1>Senha <span class="c-vermelho bold">*</span></h1>
                    <input class="input" type="password" name="senha1" id="input-senha" placeholder="Digite aqui...">
                    <span class="input__efeito"></span>
                    <p class="senha-error"></p>
                </li>
                <li class="cadastro--input">
                    <h1>Digite novamente <span class="c-vermelho bold">*</span></h1>
                    <input class="input" type="password" name="senha2" id="input-senha2" required placeholder="Digite aqui...">
                    <span class="input__efeito"></span>
                    <p class="senha-error2"></p>
                </li>
                <li class="cadastro--input cadastro--input__ativada">
                    <h1>Tipo de conta <span class="c-vermelho bold">*</span></h1>
                        <section class="cadastro--input--radios">
                            <div class="cadastro--input--radio"><input type="radio" name="tipo" value="0" required ><label for="normal">Normal</label></div>
                            <div class="cadastro--input--radio"><input type="radio" name="tipo" value="1" required ><label for="premium">Premium</label></div>
                        </section>
                        <section class="cadastro--input--opcoes">
                            <div class="cadastro--input--opcao"><img src="./src/imgs/o.png" class="bolinha"><p> Funções básicas</p><img src="./src/imgs/o.png"  class="bolinha"></div>
                            <div class="cadastro--input--opcao"><img src="./src/imgs/x.png" class="xizinho"><p> Funções avançadas</p><img src="./src/imgs/o.png"  class="bolinha"></div>
                            <div class="cadastro--input--opcao"><img src="./src/imgs/x.png" class="xizinho"><p> Variações de gráficos</p><img src="./src/imgs/o.png"  class="bolinha"></div>
                            <div class="cadastro--input--opcao"><img src="./src/imgs/x.png" class="xizinho"><p> Bases de dados grandes</p><img src="./src/imgs/o.png"  class="bolinha"></div>
                        </section>
                    <p class="senha-error2"></p>
                </li>
                    <input type="submit" value="Finalizar" id="finalizar">
                </form>
            </ul>
            <a href="./login_starlysis.php" class="cadastro--link">Já tem conta? Clique aqui para entrar</a>
            <a href="./suporte_starlysis.html" class="cadastro--link">Precisa de ajuda? Clique aqui para suporte</a>
            
            <label for="" class="submit cadastro--submit"><img src="./src/imgs/seta.png" alt="voltar" onclick="trocarInputs(1)" class="avancar"></label>
            
        </section>
    </section>
</body>

    <script src="./src/scripts/script_pagcadastro.js"></script>
</html>