<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

    <?php
    require_once 'configBD.php';
    ?>

<body>
<?php
include_once ('header.php');
?>

<section class="container">
    <!-- Buscador -->
</section>
<section class="container">
    <h2>Listado de Pokemones</h2>
<?php
include_once ('listadoCompleto.php');
?>
</section>

</body>
<script src="js/bootstrap.min.js"></script>
</html>
<?php



