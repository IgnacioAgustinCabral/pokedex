<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Completo</title>
</head>


<body>
        <?php
        require_once 'configBD.php';
        require_once 'funciones.php';

        // Llamamos a la función para recuperar todos los registros
        $resultado = listarTodo($db);

        // Comprobamos si la función devolvió algún resultado
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            // Creamos una tabla HTML para mostrar los registros
            echo '<table class="table table-bordered">';
            echo '<tr><th>Numero</th><th>Nombre</th><th>Tipo</th><th>Imagen</th><th>Descripción</th><th>Ver Detalle</th></tr>';

            // Recorremos los registros y los mostramos en la tabla
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo '<tr>';
                echo '<td>' . $fila['numero_pokemon'] . '</td>';
                echo '<td>' . $fila['nombre'] . '</td>';
                echo '<td>' . $fila['tipo'] . '</td>';
                echo '<td><img src="' . $fila['image'] . '" width="80"></td>';
                echo '<td>'.$fila['descripcion'].'</td>';
                echo '<td>'.'<a href="detallePokemon.php">'."Ver Detalles".'</a>'.'</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            // Si la función no devolvió ningún resultado, mostramos un mensaje
            echo 'No se encontraron registros.';
        }

        ?>

</body>
</html>
