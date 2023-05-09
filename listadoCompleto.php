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
            echo '<table>';
            echo '<tr><th>ID</th><th>Nombre</th><th>Tipo</th><th>Imagen</th></tr>';

            // Recorremos los registros y los mostramos en la tabla
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo '<tr>';
                echo '<td>' . $fila['id_pokemon'] . '</td>';
                echo '<td>' . $fila['nombre'] . '</td>';
                echo '<td>' . $fila['tipo'] . '</td>';
                echo '<td>'. $fila['image'] . '</td>';
                echo '<td>'.$fila['descripcion'].'</td>';
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
