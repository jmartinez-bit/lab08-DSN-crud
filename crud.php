<?php
require_once('db.php');
if(isset($_GET['eliminar'])){
    $sql = $MySQLiconn->query('DELETE FROM productos WHERE id='.$_GET['eliminar']);
    header('Location: index.php');
}

if(isset($_GET['editar'])){
    $sql = $MySQLiconn->query('SELECT * FROM productos WHERE id='.$_GET['editar']);
    $getROW = $sql->fetch_array();
}

if(isset($_GET['cod'])){
    $sql = $MySQLiconn->query('SELECT * FROM productos WHERE id='.$_GET['cod']);
    $getROW = $sql->fetch_array();
}

if(isset($_POST['update'])){
    $sql = $MySQLiconn->query("UPDATE productos SET codigo='".$_POST['codigo']."', nombre='".$_POST['nombre']."', descripcion='".$_POST['descripcion']."', cantidad=".$_POST['cantidad'].", precio=".$_POST['precio']." WHERE id=".$_GET['editar']);
    header('Location: http://localhost/crud_productos/');
}

if(isset($_POST['envio'])){
    $codigo = $MySQLiconn->real_escape_string($_POST['codigo']);
    $nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
    $descripcion = $MySQLiconn->real_escape_string($_POST['descripcion']);
    $cantidad = $MySQLiconn->real_escape_string($_POST['cantidad']);
    $precio = $MySQLiconn->real_escape_string($_POST['precio']);
    $sql = $MySQLiconn->query("INSERT INTO productos(codigo, nombre, descripcion, cantidad, precio) VALUES('$codigo','$nombre','$descripcion','$cantidad','$precio')");

    if(!$sql){
        $MySQLiconn->error;
    }
    header('Location: http://localhost/crud_productos/');
}
?>