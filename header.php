<?php
    session_start();
    if(isset($_SESSION["usuario"])){
        $nome = $_SESSION['nome'];
        $usuario = $_SESSION['usuario'];


        $cabecalho = '<section class="menu">
        <header class="header center">
            <a href="index.html"><img src="./src/imgs/logo.png" alt="logo - starlysis" class="header--logo"></a>
            <img src="./src/imgs/bars.svg" alt="menu" class="menu--bars open" onclick="sideBar()">
            <section class="menu--section">
                <ul class="header--sidebar">
                    <img src="./src/imgs/close.png" alt="menu" class="menu--bars close" onclick="sideBar()">

                    <!--analise/session-->
                    <li class="header--azul"><a href="#" >Análise</a></li>
                    <li><a href="./suporte_starlysis.php">Ajuda</a></li>
                    <li><a href="./sobre_starlysis.php">Sobre</a></li>
                    <li onclick="toggleMenu()"><u class="header--sidebar--nomeuser">'.$nome.'</u></li>
                    <li><a class="header--login" href="./login_starlysis.html" onclick="toggleMenu()"><img src="./src/imgs/user.png" alt="usuario" class="header--user"></a></li>

                    <!--pop-up-->
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
    </section>';
    } else {
        $cabecalho = '<section class="menu">
        <header class="header center">
            <a href="index.html"><img src="./src/imgs/logo.png" alt="logo - starlysis" class="header--logo"></a>
            <img src="./src/imgs/bars.svg" alt="menu" class="menu--bars open" onclick="sideBar()">
            <section class="menu--section">
                <ul class="header--sidebar">
                    <img src="./src/imgs/close.png" alt="menu" class="menu--bars close" onclick="sideBar()">

                    <li><a href="./suporte_starlysis.php">Ajuda</a></li>
                    <li><a href="./sobre_starlysis.php">Sobre</a></li>
                    <p class="header--azul" ><a href="./cadastro_starlysis.php">Cadastre-se</a></p>
                    <li><a href="./login_starlysis.php">Entrar</a></li>
                </ul>

            </section>
        </header>
    </section>';
    }
?>