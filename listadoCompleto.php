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

            if(isset($_SESSION["admin"])){
                echo '<table class="table table-bordered mt-5">';
                echo '<tr><th>Numero Pokémon</th><th>Nombre</th><th>Tipo</th><th>Imagen</th><th>Ver</th><th>Modificar</th><th>Borrar</th></tr>';
            } else {
                echo '<table class="table table-bordered mt-5">';
                echo '<tr><th>Numero Pokémon</th><th>Nombre</th><th>Tipo</th><th>Imagen</th><th>Ver</th></tr>';
            }

            // Recorremos los registros y los mostramos en la tabla
            while ($fila = mysqli_fetch_assoc($resultado)) {
                if(isset($_SESSION["admin"])){
                    echo '<tr>';
                    echo '<td>' . $fila['numero_pokemon'] . '</td>';
                    echo '<td>' . $fila['nombre'] . '</td>';
                    echo '<td>' . $fila['tipo'] . '</td>';
                    echo '<td><img src="' . $fila['image'] .'" width="80"></td>';
//                echo '<td>'.$fila['descripcion'].'</td>';
                    echo '<td><button type="button" class="btn btn-primary"><a style="text-decoration: none;color: inherit;" href=detallePokemon.php?id='.$fila['id_pokemon'].'>Ver</a></button></td>';
                    echo '<td><button type="button" class="btn btn-warning"><a style="text-decoration: none;color: inherit;" href=detallePokemon.php?id='.$fila['id_pokemon'].'>Modificar</a></button></td>';
                    echo '<td><button type="button" class="btn btn-danger"><a style="text-decoration: none;color: inherit;" href=detallePokemon.php?id='.$fila['id_pokemon'].'>Borrar</a></button></td>';
                    echo '</tr>';
                } else {
                    echo '<tr>';
                    echo '<td>' . $fila['numero_pokemon'] . '</td>';
                    echo '<td>' . $fila['nombre'] . '</td>';
                    echo '<td>' . $fila['tipo'] . '</td>';
                    echo '<td><img src="' . $fila['image'] .'" width="80"></td>';
//                echo '<td>'.$fila['descripcion'].'</td>';
                    echo '<td><a href=detallePokemon.php?id='.$fila['id_pokemon'].'>Ver</a></td>';
                    echo '</tr>';
                }

            }
            echo '</table>';
        } else {
            // Si la función no devolvió ningún resultado, mostramos un mensaje
            echo 'No se encontraron registros.';
        }
        /***
         *
         * SELECT P.nombre AS nombre,P.image AS ruta,TP.descripcion AS tipo,P.descripcion AS descripcion,P.numero_pokemon AS nro
        FROM pokemon P
        JOIN tipo_pokemon TP ON P.tipo = TP.id
        WHERE P.id_pokemon = 10;
         */
        ?>

</body>
</html>
