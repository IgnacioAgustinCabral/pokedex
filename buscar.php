<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Listado Completo</title>
</head>


<body>
<?php
include_once 'configBD.php';
include_once 'funciones.php';
include_once 'header.php';

$filtro = $_GET['filtro'];
$sql ="SELECT P.id_pokemon,P.numero_pokemon,P.image,P.nombre, TP.descripcion AS tipo, P.descripcion
            FROM pokemon P
            JOIN tipo_pokemon TP ON 
            P.tipo = TP.id
            WHERE P.nombre LIKE '%$filtro%' OR P.numero_pokemon LIKE '%$filtro%' OR TP.descripcion LIKE '%$filtro%';";
$resultado = $db->query($sql);

//$resultado  =   buscar($filtro);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    // Creo una tabla HTML para mostrar los registros
    echo '<table class="table table-bordered">';
    echo '<tr><th>Numero</th><th>Nombre</th><th>Tipo</th><th>Imagen</th><th>Descripción</th><th>Ver Detalle</th></tr>';

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo '<tr>';
        echo '<td>' . $fila['numero_pokemon'] . '</td>';
        echo '<td>' . $fila['nombre'] . '</td>';
        echo '<td>' . $fila['tipo'] . '</td>';
        echo '<td><img src="' . $fila['image'] . '" width="80"></td>';
        echo '<td>'.$fila['descripcion'].'</td>';
        echo '<td>'.'<a href="href="detallepokemon.php?nombre=Charmander&id=01&tipo=fuego&imagen=imgs/Charmander.png"">'."Ver Detalles".'</a>'.'</td>';
        echo '</tr>';
    }
        echo '</table>';
} else {
    // Si la función no devolvió ningún resultado, mostramos un mensaje
    echo 'No se encontraron registros.';
}
mysqli_close($db);
?>

</body>
