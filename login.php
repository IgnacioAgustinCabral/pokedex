<?php
require_once('configBD.php');
session_start();
$usuario = $_POST['usuario'];
$password = $_POST['password'];

//SELECT COUNT(*) AS contar FROM usuario U WHERE U.usuario = 'admin1'AND U.contrasenia = 'admin1';
$sql = "SELECT COUNT(*) as contar FROM usuario U WHERE U.usuario = '$usuario' AND U.contrasenia = '$password' ";
$resultado = mysqli_query($db, $sql);
$array = mysqli_fetch_array($resultado);


if ($array['contar'] == 1) {
    $_SESSION["admin"] = $usuario;
    header('Location:index.php');
    exit();
} else {
    header('Location:index.php?error=1');
    exit();
}


?>