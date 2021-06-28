<?php
    require_once 'cxn.php';
    $cxn = ConectionBD::getConection();

    // VARIABLES
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $celular = $_POST['celular'];

    $sqlinsert = "INSERT INTO `usuarios`(`nombre`, `apellido`, `correo`, `contrasena`, `celular`) VALUES ('$nombre', '$apellido', '$correo', '$contrasena', '$celular')";

    $cxn -> query($sqlinsert);

    echo '<script>alert("Datos guardados exitosamente");</script>';
?>