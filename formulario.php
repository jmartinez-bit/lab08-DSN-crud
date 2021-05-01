<?php
require('crud.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link rel="stylesheet" href="http://localhost/crud_productos/estilos.css">
</head>
<body>
    <div class="contenedor">
        <form method="post">
        <?php if(isset($_GET['nuevo'])) :?>
            <h1>Registro de producto</h1>
            <?php endif; ?>
            <?php if(isset($_GET['editar'])) :?>
            <h1>Editar Producto</h1>
            <?php endif; ?><br>
            <input type="hidden" name="id" value="<?php if(isset($_GET['editar'])){echo $getROW['id'];} ?>">
            <input type="text" name="codigo" placeholder="Codigo" value="<?php if(isset($_GET['editar'])){echo $getROW['codigo'];} ?>">
            <input type="text" name="nombre" placeholder="Nombre" value="<?php if(isset($_GET['editar'])){echo $getROW['nombre'];} ?>">
            <input type="text" name="descripcion" placeholder="Descripcion" value="<?php if(isset($_GET['editar'])){echo $getROW['descripcion'];} ?>">
            <input type="number" name="cantidad" placeholder="Cantidad" value="<?php if(isset($_GET['editar'])){echo $getROW['cantidad'];} ?>">
            <input type="number" name="precio" placeholder="Precio" value="<?php if(isset($_GET['editar'])){echo $getROW['precio'];} ?>">
            <?php if(isset($_GET['nuevo'])) :?>
            <input type="submit" name="envio" value="Registrar">
            <?php endif; ?>
            <?php if(isset($_GET['editar'])) :?>
            <input type="submit" name="update" value="Editar">
            <?php endif; ?>
        </form>
    </div>
</body>
</html>