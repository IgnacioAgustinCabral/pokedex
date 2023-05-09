<?php
require_once ('configBD.php');
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

//SELECT COUNT(*) AS contar FROM usuario U WHERE U.usuario = 'admin1'AND U.contrasenia = 'admin1';
$sql = "SELECT COUNT(*) as contar AS FROM usuario U WHERE U.usuario = '$usuario' AND U.contrasenia = '$password' ";
$resultado = $db->query($sql);