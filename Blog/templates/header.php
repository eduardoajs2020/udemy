<?php

    include("helpers/url.php");
    include("data/posts.php");
    include("data/categories.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <!--ESTILOS DO PROJETO -->
    <link rel="stylesheet" type ="text/css" href="<?= $BASE_URL ?>/css/style.css" >
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.png" alt="Blog Codar">
        </a>
        <nav id="navbar">
            <ul>
                <li><a href="<?= $BASE_URL ?>/index.php" class="nav-link">Home</a></li>
                 <li><a href="#" class="nav-link">Categorias</a></li>
                  <li><a href="#" class="nav-link">Sobre</a></li>
                   <li><a href="<?= $BASE_URL ?>/contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>