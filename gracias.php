<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>E-Manager</title>

    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/main.css">
    <link rel="stylesheet" href="css/nav.css">

    <!-- FUENTES -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!-- Modernizr -->
    
    <script src="js/lib/modernizr.js"></script> 
</head>
<body>
    <header>
        <div class="cd-logo">
            <a href="index.html">
                <figure class="logo">
                    <img src="images/logo-white.png" alt="Logo">
                </figure>
            </a>
        </div>

        <nav class="cd-main-nav-wrapper">
            <ul class="cd-main-nav">
                <li><a href="energia.html">Ahorro de energía</a></li>
                <li><a href="empresa.html">Compañia</a></li>                
                <li><a href="contacto.html">Contacto</a></li>
                <li>
                    <a href="#0" class="cd-subnav-trigger"><span>E-Manager3D</span></a>

                    <ul>
                        <li class="go-back"><a href="#0">Menu</a></li>
                        <li><a href="emanager3d.html">Materializa tus ideas</a></li>
                        <li><a href="impresoras.html">Impresoras 3D y Materiales</a></li>
                        <li><a href="contacto.html">Contacto</a></li>
                        <li><a href="#0" class="placeholder">Placeholder</a></li>
                    </ul>
                </li>
            </ul> <!-- .cd-main-nav -->
        </nav> <!-- .cd-main-nav-wrapper -->
        
        <a href="#0" class="cd-nav-trigger"><span></span></a>
        <div class="clearfix"></div>
        
        <!-- SUB-MENU -->

        <div class="sub-menu clearfix bg-rgba--white">
            <div class="container">
                <div class="name-logo pull-left">
                    <h2 class="reset"></h2>
                </div>
                <nav class="sub-menu__nav pull-right">
                    <ul>
                        <li class="sub-menu__item">
                            <a href="">Blog</a>
                        </li>
                        <li class="sub-menu__item sub-menu__item--contact">
                            <a href="inversores.html">Inversores</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="cd-main-content">
        <section>
            <div class="container-fluid">
              <div class="row">
                <article class="slide--contacto">

                    <figure class="item">
                        <img src="images/slide-3demanager.jpg" alt="E-Manager 3D">
                    </figure>
                    <h2 class="title--slide">!Gracias¡</h2>
                </article>
              </div>
            </div>
        </section>
    </section>
    
    <section class="cd-main-content page__contact--wraper">
        <div class="container">
            <section class="header-content">
                <div class="header-content__texto move-top">
                    <div class="container">
                        <div class="line--top"></div>
                            <h1 class="text-center">¡Gracias por contáctar con nosotros!</h1>
                            <h4 class="text-center">Su solicitud ha sido enviada, le atenderemos lo antes posible.</h4>
                            <h4 class="text-center">Para cualquier duda también puede llamarnos al (+57) 321 783 4570 - (+57) 300 863 2039</h4>
                            <br>
                        <div class="line--bottom"></div>
                        <div class="dir text-center">
                           <p class="header-content--parrafo">Medellín - Colombia</p>
                       </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- FOOTER -->

    <footer class="bg--white">
        <div class="container-fluid padding--all title--minismall">
            <p class="text-left">Copyright © 2015 E-Manager S.A.S. All rights reserved. <a class="contact__footer" href="contacto.html">Contáctenos</a></p>
        </div>
    </footer>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>  

<?php
    $name = strip_tags($_POST["name"]);
    $asunto = strip_tags($_POST["asunto"]);
    $mensaje = strip_tags($_POST["mensaje"]);
    $telefono = strip_tags($_POST["telefono"]);
    $email = 'From: ' .$_POST["email"];

    $correoDestino = "e.manager.antioquia@gmail.com";
    $comentario = "Nombre : " . $name . "\n\n" . "Email: " . $email . "\n\n" . "Télefono: " . $telefono . "\n\n" . "Asunto: " . $asunto . "\n\n" . "Mensaje: " . $mensaje;
    /*
    $comentario = "
    \n
    Nombre: $_POST[nombre]\n
    Email: $_POST[email]\n
    Opcion: $_POST[opciones]\n
    \n
    ";
*/
    $header=$header."Content-Type: text/html";
    mail($correoDestino, "Contacto E-Manager", $comentario, $email);

?>
</body>
</html>