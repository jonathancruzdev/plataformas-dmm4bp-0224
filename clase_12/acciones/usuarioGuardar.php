<?php

    require_once('../conexion.php');
    // Recibiemos los datos enviados por medio de POST
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $clave = $_POST['clave'];
    $id_rol = $_POST['id_rol'];
    // Encriptamos la constraseña
    $clave = md5( $clave);
    // Por defecto los usuario son todos visitantes
    // Creo la consulta SQL
    $sql = "INSERT INTO usuarios(nombre, email, clave, id_rol)
            VALUES('$nombre', '$email', '$clave', $id_rol )";
    // Ejecuto la consulta SQL
    $respuesta = mysqli_query($conexion, $sql);
    
    header('Location: ../index.php');
?>
