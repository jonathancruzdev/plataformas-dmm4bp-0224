<?php
    session_start();
    require_once('../conexion.php');
    // Recibiemos los datos enviados por medio de POST
    $detalle = $_POST['detalle'];
    $id_producto = $_GET['id_producto'];
    $puntuacion = 5; // La proxima lo modificamos
    $id_usuario = $_SESSION['id_usuario']; 

    // Creo la consulta SQL
    $sql = "INSERT INTO comentarios(fecha, detalle, puntuacion, id_usuario, id_producto)
            VALUES( now(), '$detalle', $puntuacion, $id_usuario, $id_producto )";
    // Ejecuto la consulta SQL
    $respuesta = mysqli_query($conexion, $sql);
    
    header("Location: ../detalle.php?id_producto=$id_producto");
?>
