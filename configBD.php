<?php

    $host = 'localhost:3306';
    $user = 'root';
    $pass = '';
    $dbname = 'pokedex';

    // Realizar la conexión a la base de datos
    $db = mysqli_connect($host, $user, $pass, $dbname);

    // Verificar si la conexión fue exitosa
    if (!$db) {
        die('No se pudo conectar a la base de datos: ' . mysqli_connect_error());
    }
?>
