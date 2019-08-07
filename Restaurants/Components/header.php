<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>S-E | S-Eat</title>
    
    <link href="./Resource/icons/restaurant_w.ico" rel="shortcut icon" type="imagen/x-icon" />

    <link href="./font-awesome/font/flaticon.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link href="./Resource/css/linecons.css" rel="stylesheet" />
    <link href="./Resource/css/animations.css" rel="stylesheet" />    
    <link href="./Resource/css/chat-widget.css" rel="stylesheet" />

    <link href="./Resource/css/theme-base.css" rel="stylesheet" />
    <link href="./Resource/css/theme-elements.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="./Resource/css/css" />
    <link rel="stylesheet" type="text/css" href="./Resource/css/custom.css" media="screen" />    

    <!-- Ventana modal -->
    <script src="./Resource/js/shadowbox-1b8e4a9.js"></script>
    <script type='text/javascript'>
        Shadowbox.init({
            overlayColor: "#000",
            overlayOpacity: "0.6",
        });
    </script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body id="sb" class="wide device-lg" onload="link()">

    <div class="loader-wrapper" style="display: none;" data-wow-duration="4s">
        <div class="loader" style="display: none;">
            <img src="./Resource/images/restaurant-w.png" alt="Loading" />
            <span class="loader-title">Loading...</span>
        </div>
    </div>

    <div class="wrapper">
        <!-- NAVABAR HEADER -->
        <header id="header" class="">
            <div id="header-wrap">
                <div class="container">
                    <div id="logo">
                        <a href="#sb" class="animatedParent logo" data-dark-logo="./Resource/images/restaurant-b.png">
                            <img class="animated fadeInDown go" src="./Resource/images/restaurant-w.png" alt="Logo"/>
                        </a>
                    </div>
                    <div class="nav-main-menu-responsive">
                        <button data-toggle="collapse" data-target=".main-menu-collapse"><i class="fa fa-navicon"></i></button>
                    </div>
                    <div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
                        <div class="container">
                            <nav id="mainMenu" class="main-menu mega-menu">
                                <ul class="main-menu nav nav-pills">
                                    <li class="dropdown hColor"><a href="Index.html" class="nav-to">Inicio</a></li>
                                    <li class="dropdown hColor"><a href="Conocenos.html" class="nav-to">Conocenos</a> </li>
                                    <li class="dropdown hColor"><a href="Servicios.html" class="nav-to">Servicio</a> </li>
                                    <li class="dropdown hColor"><a href="Clientes.html">Clientes</a></li>
                                    <li class="dropdown hColor"><a href="Reservaciones.html" class="nav-to">Reservaciones</a> </li>
                                    <li class="dropdown hColor resp-active">
                                        <a><i class="glyphicon glyphicon-user"></i></a>
                                        <ul class="dropdown-menu " style="margin-left:-189px">
                                            <li><a rel="shadowbox;width=430;height=430;" href="#mw1">&nbsp;Login</a></li>
                                            <li><a href="#">&nbsp;Logout</a></li>
                                            <li><a href="Registro.html">&nbsp;Registrarse</a></li>
                                            <!--<li><a href="Configuraciones.html">&nbsp;Configuraciones</a></li>-->
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END NAVBAR HEADER -->
        