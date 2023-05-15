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
?>

<?php
//if (isset($_GET['id']) && isset($_GET['nombre']) && isset($_GET['tipo']) && isset($_GET['imagen'])) {
//    $id = $_GET['id'];
//    $nombre = $_GET['nombre'];
//    $tipo = $_GET['tipo'];
//    $imagen = $_GET['imagen'];
//}


//switch ($tipo) {
//    case 'agua':
//        $ruta_tipo = 'imgs/tipo_agua.png';
//        break;
//    case 'fuego':
//        $ruta_tipo = 'imgs/tipo_fuego.png';
//        break;
//    case 'eléctrico':
//        $ruta_tipo = 'imgs/tipo_electrico.png';
//        break;
//    case 'tierra':
//        $ruta_tipo = 'imgs/tipo_tierra.png';
//        break;
//    case 'psíquico':
//        $ruta_tipo = 'imgs/tipo_psiquico.png';
//        break;
//    default:
//        $ruta_tipo = 'imgs/tipo_desconocido.png';
//        break;
//
//
//}


//var_dump($_GET);

require_once 'configBD.php';
require_once 'funciones.php';
$id = $_GET["id"] ?? '';
$resultado = detallePorId($db,$id);
$pokemon = mysqli_fetch_assoc($resultado);

?>
<div class="container" style="margin-top: 10em;">
    <div class="row">
        <div class="col-5">
            <img style="max-width: 100%;" src="<?php echo $pokemon["ruta"] ?>" alt="Imagen de <?php echo $pokemon["nombre"] ?>">
        </div>

        <div class="col-7 border-start  mt-4">
            <div class="row text-center">
                <div class="col-4">
                    <h1>Número:<?php echo $pokemon["nro"]; ?></h1>
                </div>
                <div class="col-4">
                    <h1><?php echo $pokemon["nombre"]; ?></h1>
                </div>
                <div class="col-4">
                    <h1><?php echo $pokemon["tipo"]; ?><img style="width: 25px; height: 25px" src="<?php echo $pokemon["ruta_tipo"] ?>" alt="logo de tipo <?php echo $pokemon["tipo"]; ?>"></h1>
                </div>
            </div>
            <div class="row" style="margin-top: 10em;">
                <div class="col-12">
                    <h3><?php echo $pokemon["descripcion"];?></h3>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>