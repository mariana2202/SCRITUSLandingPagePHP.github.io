<?php

session_start();
include('server/cxn.php');

$username = $_POST['username'];
$password = $_POST['password'];
$password = hash('md5', $password);

$query = $cxn->prepare("SELECT * FROM usuarios WHERE correo=:username AND contrasena=:password");
$query->bindParam("username", $username, PDO::PARAM_STR);
$query->bindParam("password", $password, PDO::PARAM_STR);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

if (!$result || !count($result)) {
    echo '<script>alert("Usuario y contraseña no coinciden");</script>';
} else {
    $_SESSION['user'] = $result;
    header("Location: ".PAGE_ROOT."/usuarios.php");
}
