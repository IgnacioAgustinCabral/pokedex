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
if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['tipo']) && isset($_FILES['imagen'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $imagen = $_FILES['imagen'];
}
switch ($tipo) {
    case 'agua':
        $ruta_imagen = 'imgs/tipo_agua.png';
        break;
    case 'fuego':
        $ruta_imagen = 'imgs/tipo_fuego.png';
        break;
    case 'eléctrico':
        $ruta_imagen = 'imgs/tipo_electrico.png';
        break;
    case 'tierra':
        $ruta_imagen = 'imgs/tipo_tierra.png';
        break;
    case 'psíquico':
        $ruta_imagen = 'imgs/tipo_psiquico.png';
        break;
    default:
        $ruta_imagen = 'imgs/tipo_desconocido.png';
        break;


}

?>
<div class="container mt-5 mb-4">
    <div class="row">
        <div class="col-4">
            <?php echo '<img src="' . $ruta_imagen . '" alt="ImagenPkm" class="img-fluid">';?>
        </div>

        <div class="col-8">
            <div class="row">
                <div class="col-3">
                    <?php echo '<img src="' . $ruta_imagen . '" alt="' . $tipo . '" class="align-content-start">';?>
                </div>
                <div class="col-1"><p class="text-center">ID: <?php echo $id; ?></p></div>
                <div class="col-8"><p class="text-start"><?php echo $nombre; ?></p></div>
            </div>

            <div class="row"></div>

            <div class="row">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, alias aperiam dicta dolorem doloremque
                    dolorum et excepturi, exercitationem id illo incidunt ipsa iste iure minima nam nesciunt nisi
                    numquam, odit officiis omnis pariatur perspiciatis quaerat voluptates? Consectetur cupiditate
                    deserunt fuga laboriosam odit officia, perferendis perspiciatis quas quibusdam quisquam quo quod
                    saepe sunt veniam vitae voluptates voluptatum. Alias animi atque incidunt non tempore. Consequatur
                    culpa debitis dolor dolore ducimus earum incidunt ipsa iste iusto maxime minus modi nam obcaecati
                    quasi sequi sunt suscipit vel, vero voluptas voluptatibus! Asperiores at corporis dolorem dolorum
                    earum eligendi minima, nam nisi, nulla quia repellendus reprehenderit repudiandae sed voluptas
                    voluptate! Ad asperiores harum iusto labore saepe? Blanditiis, ducimus porro. Accusantium adipisci
                    commodi ducimus illum incidunt minima molestiae pariatur quae repellendus reprehenderit. A adipisci
                    alias assumenda culpa cum esse ex expedita fuga harum, inventore itaque nam, perferendis porro
                    provident ratione sed unde. Consectetur debitis reprehenderit tempore voluptatem?</p>
            </div>

        </div>
    </div>
</div>

</body>
</html>