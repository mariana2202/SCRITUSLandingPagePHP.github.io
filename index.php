<?php

define('PAGE_ROOT', '/SCRITUS3');

if (isset($_POST['registro']))
    require_once('server/registro.php');
else if (isset($_POST['username']) && !empty($_POST['username']))
    require_once('server/login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCRITUS</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/icono-logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div>

        <!-- MENÙ -->
        <?php include('partials/menu.php'); ?>

        <!-- INICIO DE SESIÓN -->
        <?php include('partials/login.php'); ?>

        <!-- INICIO -->
        <?php include('partials/inicio.php'); ?>

        <!-- NOSOTROS -->
        <?php include('partials/nosotros.php'); ?>

        <!-- CONTENIDO -->
        <?php include('partials/contenido.php'); ?>

        <!-- BENEFICIOS -->
        <?php include('partials/beneficios.php'); ?>

        <!-- TESTIMONIOS -->
        <?php include('partials/testimonios.php'); ?>

        <!-- CUPÓN -->
        <?php include('partials/cupon.php'); ?>

        <!-- FOOTER -->
        <?php include('partials/footer.php'); ?>

    </div>

    <!-- Código Javascript CDN-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- <script src="codigo.js"></script> -->

    <!-- Código Javascript Local-->
    <!-- <script src="jquery-3.5.1.min.js"></script>
    <script src="popper.js"></script>
    <script src="codigo.js"></script>
    <script src="js/bootstrap.js"></script>  -->

</body>

</html>