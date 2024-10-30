<?php
    require_once('html/header.php');
    require_once('html/nav.php');
    require_once('conexion.php');
    // Verificamos si el usuario está logueado
    if( ! isset( $_SESSION['usuario'] )   ){  // Si No existe la session
        header('Location: login.php');
    }
?>

<main class="container">
    <div class="row mt-4">
        <div class="col"></div>
        <div class="col">
            <h2> Página de perfil</h2>
            <h4><?php echo($usuario); ?></h4>
        </div>
        <div class="col"></div>
    </div>
</main>
<?php
    require_once('html/footer.php');
?>