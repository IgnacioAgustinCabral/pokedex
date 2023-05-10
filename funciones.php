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
    $sqlNumero = "SELECT numero_pokemon FROM pokemon WHERE numero_pokemon = '$numero'";
    $result = $db->query($sqlNumero);
    if(mysqli_num_rows($result) > 0){
        echo "Ya hay un pokemon con ese número";
        exit();
    } else{
        $sql = "INSERT INTO pokemon(numero_pokemon, nombre, image, tipo, descripcion) VALUES ('$numero', '$nombre','$rutaImagen','$tipo','$descripcion')";

        $resultado_ejecucion = $db->query($sql);
        if($resultado_ejecucion){
            return $resultado_ejecucion;
        } else{
            echo "No se pudo agregar el pokemon. ";
            header("Location: index.php");
            exit();
        }
    }

}

function verificarImagen($imagen, $nombre){
    $uploadOk = 1;
    $target_dir = "imgs/";
    $target_file = $target_dir . basename($_FILES['imagen']['name']);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $new_file_name = $target_dir . $nombre . '.' . $imageFileType;

    if (file_exists($new_file_name)) {
        echo "Lo siento, ya hay una imagen cargada con ese nombre de archivo. ";
        $uploadOk = 0;
    }

    if ($_FILES['imagen']['size'] > 500000) {
        echo "Lo siento, la imagen seleccionada es demasiado grande. ";
        $uploadOk = 0;
    }

    if ($imageFileType != 'png') {
        echo "Solo se permiten imágenes en formato .PNG. ";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Intente nuevamente más tarde. ";
        exit();
    } else {
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $new_file_name)) {
            echo "El archivo " . htmlspecialchars(basename($_FILES["imagen"]["name"])) . " ha sido subido con el nombre " . basename($new_file_name) . ".";
            //header("Location: index.php");
            //exit;
        } else {
            echo "Lo siento, ha ocurrido un error al cargar el pokemon, intente nuevamente más tarde. ";
        }
    }

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