<?php
    session_start();
    unset($_SESSION['usuario']);
    unset($_SESSION['email']);
    unset($_SESSION['id_usuario']);
    unset($_SESSION['id_rol']);
    session_unset();
    session_destroy();
    echo('Saliendo de la sesión');
    header('Location: index.php');
?>