<?php
include("protect.php");
?>

<!DOCTYPE html>
<!--Code by Divinector (www.divinectorweb.com)-->
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/1936905_computer_device_mac_pc_work_icon.png">

    <title>Página Inicial</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/style_home_page.css">

</head>

<body>

    <header>
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/1936905_computer_device_mac_pc_work_icon.png" width="50" height="50" alt="">
                        <a class="navbar-brand" href="#"><span style="color: #1ba4ff">GP </span>WORKS <span style="color: #1ba4ff">MD</span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="home_page.php">Página Inicial</a></li>
                        <li><a href="conta.php">Sua Conta</a></li>
                        <li><a href="contato.php">Suporte</a></li>
                        <li><a href="logout.php">Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>



        <!-- Indicators -->


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="banner" style="background-image: linear-gradient(rgba(8, 1, 26, 0.75),rgba(5, 0, 12, 0.75)), url(assets/img/background.jpg);"></div>
                <div class="carousel-caption">
                    <h2 class="animated bounceInRight" style="animation-delay: 1s">Visualizar <span class="text-info"> Cadastrar</span></h2>
                    <h3 class="animated bounceInLeft" style="animation-delay: 1s">Visualize ou cadastre seu(a) prestador(a) de seviço.</h3>
                    <div class="botao">
                        <p class="animated bounceInRight" style="animation-delay: 1s"><a href="visualizar_prest.php">Visualizar prestador</a><a href="cadastrar_prest.php"> Cadastrar prestador </a>
                    </div>
                </div>
            </div>


        </div>

        <!-- Controls -->



    </header>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>