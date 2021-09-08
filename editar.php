<?php

require_once "classes/blog.class.php";

$Executar_update = new Mostrar_noticias();
$Executar_update->editar();



?>


<!DOCTYPE html>
<head>
    <title>Visualizar Perfil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Editar</title>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Logo</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active m-3">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item m-3">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item m-3">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>
    </div>
    <form class="login100-form" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Id</span>
                </div>
            </div>
            <input type="text" name="id" class="form-control"  value="<?=utf8_encode($Executar_update->id)?>">

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Titulo</span>
                </div>
            </div>
            <input type="text" name="titulo" class="form-control"  value="<?=utf8_encode($Executar_update->titulo)?>">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Indrodução</span>
            </div>
            <input type="text" class="form-control" name="text_area" value="<?=utf8_encode($Executar_update->text_area)?>">
            <div class="container-login100-form-btn">
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn salvarDados mt-2" name="editar" type="submit">Enviar</button>
                     </div>
            </div>

    </form>