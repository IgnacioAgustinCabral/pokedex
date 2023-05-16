<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Pokédex</title>
</head>
<body>
<?php
include_once ('header.php');
include_once ('funciones.php');
include_once ('configBD.php');

if(!isset($_SESSION["admin"])){
    header("Location:iasd.php");
    exit();
}

$id = $_GET["id"] ?? '';
$resultado = trearDatos($db,$id);
$optionSeleccionada = $resultado["tipo_nro"];

if(isset($_POST['submit'])){
    if(!empty($_POST['nombre']) && !empty($_POST['tipo']) && !empty($_POST['numero']) && !empty($_FILES['imagen']) && !empty($_POST['descripcion'])){
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $numero = $_POST['numero'];
        $descripcion = $_POST['descripcion'];
        $target_dir = "imgs/";
        $rutaImagen = $target_dir . basename($_FILES['imagen']['name']);
        $imagen = $_FILES['imagen'];

        if(modificar($db, $id,$numero, $nombre, $rutaImagen, $tipo, $descripcion)){
            header("Location:index.php");
            exit();
        }

    } else {
        echo "Hay algún error en los campos ingresados, reintente nuevamente. ";
    }
}

?>
<h1 class="text-center mt-5 mb-4">Modifique Pokémon</h1>
<div class="container">
    <form class="row g-3 m-3 p-3" action="modificarPokemon.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

        <div class="col-4">
            <label class="form-label" for="nombre">Ingrese nombre del Pokémon:</label>

            <input type="text" class="form-control" required name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $resultado["nombre"];?>">
        </div>

        <div class="col-4">
            <label class="form-label" for="tipo">Seleccione el tipo del Pokémon:</label>
            <?php
            $options = array("Tipo", "Agua", "Fuego", "Eléctrico","Psíquico","Tierra");
            ?>
            <select class="form-select" required name="tipo" id="tipo" value="1">
                <option value="">Tipo</option>
                <option value="1" <?php if ($optionSeleccionada == '1') { echo ' selected'; } ?>>Agua</option>
                <option value="2" <?php if ($optionSeleccionada == '2') { echo ' selected'; } ?>>Fuego</option>
                <option value="3" <?php if ($optionSeleccionada == '3') { echo ' selected'; } ?>>Eléctrico</option>
                <option value="4" <?php if ($optionSeleccionada == '4') { echo ' selected'; } ?>>Psíquico</option>
                <option value="5" <?php if ($optionSeleccionada == '5') { echo ' selected'; } ?>>Tierra</option>
            </select>
        </div>

        <div class="col-4">
            <label class="form-label" for="numero">Ingrese número de Pokémon:</label>
            <input type="number" class="form-control" required name="numero" id="numero" placeholder="Número" value="<?php echo $resultado["numero"];?>">
        </div>

        <div class="col-12">
            <label class="form-label" for="imagen">Ingrese imagen</label>
            <input type="file" class="form-control" required name="imagen" id="imagen">
        </div>

        <div class="col-12">
            <label class="form-label" for="descripcion">Escriba una descripcion:</label>
            <textarea class="form-control" name="descripcion" required id="descripcion" placeholder="Descripción..."><?php echo $resultado["descripcion"];?></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-50 mx-auto" name="submit">Modificar</button>

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
<script src="js/bootstrap.min.js"></script>
</html>


