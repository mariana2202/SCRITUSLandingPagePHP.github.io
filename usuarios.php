<?php
    session_start();
    
    if(!isset($_SESSION['user'])){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIOS</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/icono-logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-usuario.css">
</head>
<body>

    <div>

        <!-- MENÙ -->
        <nav class="navbar navbar-expand-lg sticky-top bg-light" id="fondo-menu">
            <img src="img/logo.png" class="img-fluid navbar-brand" alt="Img-Resp">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                    <span class="navbar-toggler-icon"><img class="img-fluid" src="img/menu (1).png" alt="Img Responsive"></span>
                </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ml-auto py-1 px-2 bg-light">
                    <li class="nav-item"><a class="nav-link" href="index.php" target="_blank">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#redaccion">Redacción</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ortografia">Ortografía</a></li>
                    <?php 
                        if(isset($_SESSION['user'])){?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Hola, <?= $_SESSION['user']['nombre']?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Cerrar Sesión</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>

        <!-- NOSOTROS -->
        <section class="px-5 pb-4 bg-azul-osc" id="redacción">
            <div class="row">
            <div class="col-lg-12 col-md-6 col-12 mt-4 mx-auto my-4 ml-auto">
                    <h1 class="font-weight-bold text-orange display-3 text-center">REDACCIÓN</h1>
                </div>
            </div>
            <div class="row">    
                <div class="col-lg-6 col-md-6 col-12 m-auto align-items-center justify-content-center">
                    <div class="text-center mb-3">
                        <h2 class="font-weight-bold text-orange text-center text-center-md mb-1 display-4">TEMAS</h2>
                        <h3 class="text-light">
                            – Estructura y conceptos básicos de la redacción. 
                            <br>
                            – Signos de puntuación.
                        </h3>
                    </div>    
                </div>
                <div class="col-lg-6 col-md-8 col-12 mx-auto pb-4 d-flex align-items-center justify-content-center">
                    <video width="500" height="285" controls>
                        <source src="img/Video introductorio.mp4" type="video/mp4"> <source>
                    </video>
                </div>
        </section>

        <!-- CONTENIDO -->
        <section class="px-5 pb-4 bg-light" id="ortografia">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-12 mt-4 mx-auto my-4 ml-auto">
                    <h1 class="font-weight-bold text-azul-osc display-3 text-center">ORTOGRAFÍA</h1>
                </div>
            </div>
            <div class="row">    
                <div class="col-lg-6 col-md-8 col-12 mx-auto pb-4 d-flex align-items-center justify-content-center">
                    <video width="500" height="285" controls>
                        <source src="img/C-S-Z.mp4" type="video/mp4"> <source>
                    </video>
                </div>
                <div class="col-lg-6 col-md-6 col-12 m-auto align-items-center justify-content-center">
                    <div class="text-center mb-3">
                        <h2 class="font-weight-bold text-orange text-center text-center-md mb-1 display-4">TEMAS</h2>
                        <h3 class="text-azul-osc">
                            – Acentuación. 
                            <br>
                            – Uso adecuado de la C, S y Z.
                        </h3>
                    </div>
                    
                </div>    
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="col-lg-12 col-md-12 col-sm-12 mr-auto pt-4 text-center bg-azul-osc text-light py-2">
            <h6>Contáctenos: 321 552 7963</h6>
            <h6>Todos los derechos reservados a SCRITUS</h6>
        </footer>


    </div>

        



    <!-- Código Javascript CDN-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>  
    <script src="codigo.js"></script>

    <!-- Código Javascript Local-->
    <!-- <script src="jquery-3.5.1.min.js"></script>
    <script src="popper.js"></script>
    <script src="codigo.js"></script>
    <script src="js/bootstrap.js"></script>  -->

</body>
</html>