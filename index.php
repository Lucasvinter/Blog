<?php

require_once "classes/blog.class.php";

// Lista de match
$noticias = new Mostrar_noticias();
$noticias->mostrar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Home</title>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Logo</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active m-3">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item m-3">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item m-3">
                    <a class="nav-link" href="#">Contato</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </nav>
</div>

<?php if($noticias->resultado == null){
    echo "Não há noticias";
}?>

<div class="container col-md-8">
    <div class="row mb-2 show_total">
        <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12 text-primary" align="left">
            <h1>Blog</h1>
        </div>
        <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="linha-horizontal"></div>
        </div>
        <?php foreach ($noticias->resultado as $key => $value) { ?>


            <nav class="nav show_nav">
                <div class="row col-xs-6 col-sm-6 col-md-6 col-lg-6"  align="center">
                    <a class="nav-link" href="editar.php?id=<?=$noticias->resultado[$key]['id']?>">
                        <h1 class="text-primary"><?=utf8_encode($noticias->resultado[$key]['titulo'])?></h1><br>
                    </a>
                    <h6 class="text-secondary"><?=utf8_encode($noticias->resultado[$key]['text_area'])?></h6>
                </div>
                <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="linha-horizontal01"></div>
                </div>
            </nav>
        <?php  } ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
