<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Pokedex</title>
</head>
<body>
<?php
include_once ('header.php');
?>
    <h1 class="text-center mt-5 mb-4">Agregue Pokémon</h1>
    <div class="container">
        <form class="row g-3 m-3 p-3" action="altaPokemon.php" method="post" enctype="multipart/form-data">

            <div class="col-4">
                <label class="form-label" for="nombre">Ingrese nombre del Pokémon:</label>
                <input type="text" class="form-control" required name="nombre" id="nombre" placeholder="Nombre">
            </div>

            <div class="col-4">
                <label class="form-label" for="tipo">Seleccione el tipo del Pokémon:</label>
                <select class="form-select" required name="tipo" id="tipo">
                    <option selected value="">Tipo</option>
                    <option value="1">Agua</option>
                    <option value="2">Fuego</option>
                    <option value="3">Eléctrico</option>
                    <option value="4">Psíquico</option>
                    <option value="5">Tierra</option>
                </select>
            </div>

            <div class="col-4">
                <label class="form-label" for="numero">Ingrese número de Pokémon:</label>
                <input type="number" class="form-control" required name="numero" id="numero" placeholder="Número">
            </div>

            <div class="col-12">
                <label class="form-label" for="imagen">Ingrese imagen</label>
                <input type="file" class="form-control" required name="imagen" id="imagen">
            </div>

            <div class="col-12">
                <label class="form-label" for="descripcion">Escriba una descripcion:</label>
                <textarea class="form-control" name="descripcion" required id="descripcion" placeholder="Descripción..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-50 mx-auto" name="submit">Agregar</button>

        </form>
    </div>
</body>

<!--Para sacar los selectores de numero en input de ingresar nro de pokemon -->
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
</html>
<?php
include_once ('funciones.php');
include_once ('configBD.php');



if(isset($_POST['submit'])){

    if(!empty($_POST['nombre']) && !empty($_POST['tipo']) && !empty($_POST['numero']) && !empty($_FILES['imagen']) && !empty($_POST['descripcion'])){
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $numero = $_POST['numero'];
        $descripcion = $_POST['descripcion'];
        $target_dir = "imgs/";
        $rutaImagen = $target_dir . basename($_FILES['imagen']['name']);
        $imagen = $_FILES['imagen'];

        $result = darDeAlta($db, $numero, $nombre, $rutaImagen, $tipo, $descripcion);
        if($result=='true'){
            verificarImagen($imagen, $nombre);
        }else{
            echo "Ocurrió un error inesperado, intente nuevamente.";
        }
    } else{
        echo "Hay algún error en los campos ingresados, reintente nuevamente. ";
    }
}