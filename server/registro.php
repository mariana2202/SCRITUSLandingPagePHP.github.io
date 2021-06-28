<?php

session_start();
include('server/cxn.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('md5', $contrasena);
$celular = $_POST['celular'];

$query = $cxn->prepare("SELECT * FROM usuarios WHERE CORREO=:correo");
$query->bindParam("correo", $correo, PDO::PARAM_STR);
$query->execute();

if ($query->rowCount() > 0) {
    echo '<p class = "error, mb-0">Este correo ya está registrado</p>';
    // echo '<script>alert("Este correo ya está registrado");</script>';
}
if ($query->rowCount() == 0) {
    $query = $cxn->prepare("INSERT INTO usuarios(NOMBRE,APELLIDO,CORREO,CONTRASENA,CELULAR) VALUES (:nombre, :apellido, :correo, :contrasena, :celular)");
    $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
    $query->bindParam("apellido", $apellido, PDO::PARAM_STR);
    $query->bindParam("correo", $correo, PDO::PARAM_STR);
    $query->bindParam("contrasena", $contrasena, PDO::PARAM_STR);
    $query->bindParam("celular", $celular, PDO::PARAM_STR);
    $result = $query->execute();

    if ($result) {
        // echo '<p class = "sucess">Registro exitoso</p>';
        echo '<script>alert("Registro exitoso");</script>';
    } else {
        // echo '<p class = "sucess">Algo salió mal</p>';
        echo '<script>alert("Algo salió mal");</script>';
    }
}
