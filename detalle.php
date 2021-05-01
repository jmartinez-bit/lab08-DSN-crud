<?php include('crud.php') ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del producto</title>
    <link rel="stylesheet" href="http://localhost/crud_productos/detalle.css">
</head>
<body>
    <section class="main">
        <h2>Datos del producto: <?php echo $getROW['id'] ?></h2>
        <ul>
            <li>Codigo: <?php echo $getROW['codigo']; ?></li>
            <li>Nombre: <?php echo $getROW['nombre']; ?></li>
            <li>Descripcion: <?php echo $getROW['descripcion']; ?></li>
            <li>Cantidad: <?php echo $getROW['cantidad']; ?></li>
            <li>Precio: <?php echo $getROW['precio']; ?></li>
        </ul>
    </section>
</body>
</html>