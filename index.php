<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/90ab493dae.js" crossorigin="anonymous"></script>
    <title>Pokédex</title>
</head>
<body>

<?php
include_once ('header.php');
//    require_once 'configBD.php';
if(isset($_GET['error'])){
    echo '<h1 style="color:red">Datos Incorrectos</h1>';
}
if(isset($_SESSION["admin"])){
    echo '
            <div class="m-4">
            
                <a style="margin-top: 2em;text-decoration: none;" href="altaPokemon.php" class="link-success mt-5 mb-5">Agregar Pokémon <i class="fa-regular fa-plus"></i></a>
            </div>';
}
?>

<section class="container">
    <form class="d-flex justify-content-center" action="buscar.php" method="GET" >
        <div class="col-4">
            <input class="form-control"name="filtro" type="search" placeholder="Buscar" aria-label="Buscar">
        </div>
        <button class="btn btn-outline-success" type="submit" >Buscar</button>
    </form>
</section>

<section class="container mt-4">
    <h2>Listado de Pokemones</h2>
        <?php
        include_once ('listadoCompleto.php');

        ?>
</section>
</body>
<script src="js/bootstrap.min.js"></script>
</html>

