<?php

function listarTodo($conexion){
    $sql = "SELECT P.id_pokemon,P.numero_pokemon,P.image,P.nombre, TP.descripcion AS tipo
            FROM pokemon P
            JOIN tipo_pokemon TP ON 
            P.tipo = TP.id;";
    $resultado_ejecucion = mysqli_query($conexion ,$sql);
    return $resultado_ejecucion;
}

function consultarTipo($conexion,$tipo){
    $sql = "SELECT id 
            FROM tipo_pokemon
            WHERE descripcion = $tipo";
     $resultado_ejecucion = mysqli_query($conexion ,$sql);
    return $resultado_ejecucion;
}

function darDeAlta($conexion, $id_pokemon, $numero, $nombre,$img,$tipo,$descripcion){
    $id     = $_POST['id_pokemon'];
    $numero = $_POST['numero'];
    $nombre = $_POST['nombre'];
    $img    = $_POST['image'];
    $tipo   =$_POST['tipo'];
    $descripcion=$_POST['descripcion'];
    $tipoID=consultarTipo($conexion,$tipo);

    $sql = "INSERT INTO pokemon VALUES ($id, $numero, $nombre,$img,$tipoID,$descripcion)";
    $resultado_ejecucion = mysqli_query($conexion,$sql);
    return $resultado_ejecucion;
}


?>