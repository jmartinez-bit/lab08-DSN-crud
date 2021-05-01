<?php include('crud.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Gestion de productos</title>
    <link rel="stylesheet" href="principal.css">
</head>
<body>
    <header>
        <h1>Lista de Productos</h1>
    </header><br>
    <div class="contenedor">

        <section class="lista">
        <a class="btn new" href="formulario.php/?nuevo">+</a><br><br>
        <table>
            <tr>
                <th>#</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            <?php
            $res = $MySQLiconn->query('SELECT * FROM productos');
            while ($row=$res->fetch_array()){?>
            <tr>
                <td><a href="detalle.php?cod=<?php echo $row['id'] ?>"><?php echo $row['id']; ?></a></td>
                <td><?php echo $row['codigo']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>
                <td><?php echo $row['cantidad']; ?></td>
                <td><?php echo $row['precio']; ?></td>
                <td><a class="btn edicion" href="formulario.php/?editar=<?php echo $row['id']; ?>">Editar</a>
                <a class="btn negativo" href="?eliminar=<?php echo $row['id']; ?>" onclick="return confirm('Confirmar eliminacion');">-</a></td>
            </tr>
            <?php } ?>
        </table>
        </section>
    </div>
    
</body>
</html>