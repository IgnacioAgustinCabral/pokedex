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

</body>
<script src="js/bootstrap.min.js"></script>


<a href="detallepokemon.php?nombre=Charmander&id=01&tipo=fuego&imagen=imgs/Charmander.png"> Ver </a>

<br>
<br>

</html>


<?php
$id = "01";
$nombre = "Charmander";
$tipo = "fuego";
$imagen = "imgs/Charmander.png";

echo '<a href="detallepokemon.php?id=' . $id . '&nombre=' . $nombre . '&tipo=' . $tipo . '&imagen=' . $imagen . '">' . $nombre . '</a>';


?>