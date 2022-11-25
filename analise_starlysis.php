<?php
    if(!(isset($_SESSION['email']))){
        header('Location:index.php');

    }
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
</body>
<script src="./src/scripts/script_pagprincipal.js"></script>
</html>
