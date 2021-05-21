<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Loja Online | Loja Virtual</title>
    <meta charset="UTF-8">
    <meta content="Loja Virtual" name="description">
    <meta content="Loja Virtual, eCommerce, creative, html" name="keywords">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="custom/site/img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link href="/custom/site/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/custom/site/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="/custom/site/css/flaticon.css" rel="stylesheet"/>
    <link href="/custom/site/css/slicknav.min.css" rel="stylesheet"/>
    <link href="/custom/site/css/jquery-ui.min.css" rel="stylesheet"/>
    <link href="/custom/site/css/owl.carousel.min.css" rel="stylesheet"/>
    <link href="/custom/site/css/animate.css" rel="stylesheet"/>
    <link href="/custom/site/css/style.css" rel="stylesheet"/>
    <link href="/custom/site/css/custom.css" rel="stylesheet"/>

</head>
<body>

<!-- Header section -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a class="site-logo" href="/">
                        <h2>Ecommerce</h2>
                    </a>
                </div>
                <div class="col-lg-2 col-lg-10 text-right">
                    <div class="user-panel">

                        <div class="up-item">
                            <i class="flaticon-menu"></i>
                            <a href="/profile">Minha Conta</a>
                        </div>
                        <!--<div class="up-item ml-4">
                            <i class="flaticon-heart"></i>
                            <a href="#">Lista de Desejos</a>
                        </div>-->
                        <div class="up-item ml-4">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
                                <span>R$<?php echo getCartVlSubTotal(); ?></span>
                            </div>
                            <a href="/cart">Carrinho</a>
                        </div>
                        <?php if( checkLogin(false) ){ ?>

                        <div class="up-item ml-4">
                            <i class="flaticon-profile"></i>
                            <a href="/profile"><?php echo getUserName(); ?></a>
                        </div>
                        <div class="up-item ml-4">
                            <i class="flaticon-logout"></i>
                            <a href="/logout">Sair</a>
                        </div>
                        <?php }else{ ?>

                        <div class="up-item ml-6">
                            <i class="flaticon-profile"></i>
                            <a href="/login">Login</a> ou <a href="/login">Criar Conta</a>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <!-- menu -->
            <ul class="main-menu">
                <li class="active"><a href="/">HOME</a></li>
                <li><a href="#">CATEGORIAS</a>
                    <ul class="sub-menu">
                        <?php require $this->checkTemplate("categories-menu");?>

                    </ul>
                </li>
                <li><a href="/cart">CARRINHO</a></li>
            </ul>
        </div>
    </nav>
</header>
<!-- Header section end -->
