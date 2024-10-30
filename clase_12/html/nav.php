<?php
    
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">ElectroHome</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categorías
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Computación</a></li>
                    <li><a class="dropdown-item" href="#">Celulares</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Tablets</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactos</a>
                </li>
            </ul>
            <div class="dropdown">
                <?php
                    if( isset( $_SESSION['usuario'])){
                ?>
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo($usuario); ?>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="cuenta.php">Cuenta</a></li>
                        <li><a class="dropdown-item" href="#">Carrito</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                <?php
                    } else {
                ?>
                    <a class="btn btn-primary" href="registro.php">Registrarme</a>
                    <a class="btn btn-success" href="login.php">Login</a>
                <?php
                    }
                ?>

            </div>
        </div>
        </div>
</nav>