<?php
    session_start();
    require_once('../conexion.php');
    // Recibiemos los datos enviados por medio de POST
    $email = $_POST['email'];
    $clave = $_POST['clave'];
    // Encriptamos la constraseña
    $clave = md5( $clave);    
    // Creo la consulta SQL
    $sql = "SELECT id_usuario, nombre, email, id_rol
            FROM usuarios
            WHERE email = '$email' AND clave = '$clave'";
    // Ejecuto la consulta SQL
    $respuesta = mysqli_query($conexion, $sql);
    $usuario =  mysqli_fetch_assoc($respuesta);
    if( $usuario){
        $nombre = $usuario['nombre'];
        $email = $usuario['email'];
        $id_usuario = $usuario['id_usuario'];
        $id_rol = $usuario['id_rol'];

        $_SESSION['usuario'] = $nombre;
        $_SESSION['email'] = $email;
        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['id_rol'] = $id_rol;
        echo(' Datos Correctos');
        header('Location: ../index.php');

    } else {
        echo( '<h2> Datos incorrectos </h2><a href="../login.php">Ir al login</a>');

    }
    


    
?>
