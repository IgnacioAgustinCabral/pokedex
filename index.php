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

<body>
<?php
include_once ('header.php');
//    require_once 'configBD.php';
if(isset($_GET['error'])){
    echo '<h1 style="color:red">Datos Incorrectos</h1>';
}
?>

</body>
<script src="js/bootstrap.min.js"></script>
</html>
<?php



