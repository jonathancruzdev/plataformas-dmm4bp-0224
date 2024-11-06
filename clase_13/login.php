<?php
    require_once('html/header.php');
    require_once('html/nav.php');
    require_once('conexion.php');
?>

<main class="container">
    <div class="row mt-4">
        <div class="col"></div>
        <div class="col">
            <form action="acciones/usuarioLogin.php" method="post" class="card p-4">
                <h2 class="text-center"> Login</h2>
                <div class="mb-2">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control">
                </div>

                <div class="mb-2">
                    <label>Contraseña</label>
                    <input name="clave" type="password" class="form-control">
                </div>

                <button class="btn btn-success" type="submit">Ingresar</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</main>
<?php
    require_once('html/footer.php');
?>