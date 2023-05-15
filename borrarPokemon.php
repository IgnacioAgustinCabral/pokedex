<?php
session_start();
require_once 'configBD.php';
require_once 'funciones.php';

if(!isset($_SESSION["admin"])){
    header("Location:index.php");
    exit();
}

$id = $_GET["id"] ?? '';
$resultado = borrarPokemonPorID($db,$id);
if($resultado){
    header("Location:index.php");
    exit();
} else {
    echo "Error al borrar Pokémon";
}

?>