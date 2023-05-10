<?php

function listarTodo($conexion){
    $sql = "SELECT P.id_pokemon,P.numero_pokemon,P.image,P.nombre, TP.descripcion AS tipo, P.descripcion
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

function darDeAlta($db, $numero, $nombre,$rutaImagen,$tipo,$descripcion){
    include_once ('configBD.php');

    $sql = "INSERT INTO pokemon(numero_pokemon, nombre, image, tipo, descripcion) VALUES ('$numero', '$nombre','$rutaImagen','$tipo','$descripcion')";
    $resultado_ejecucion = $db->query($sql);
    if($resultado_ejecucion){
        return "alta exitosa";
        //return $resultado_ejecucion;
    } else{
        echo "error";
        header("Location: index.php");
        exit();
    }
}

function verificarImagen($imagen){
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($imagen, PATHINFO_EXTENSION));
    $new_file_name = $imagen;

}
function buscar($filtro){

    $sql ="SELECT P.id_pokemon,P.numero_pokemon,P.image,P.nombre, TP.descripcion AS tipo, P.descripcion
            FROM pokemon P
            JOIN tipo_pokemon TP ON 
            P.tipo = TP.id
            WHERE P.nombre LIKE '%$filtro%' OR P.numero_pokemon LIKE '%$filtro%' OR TP.descripcion LIKE '%$filtro%';";
    return $resultado = $db->query($sql);
}



?>