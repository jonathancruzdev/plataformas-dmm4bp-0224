<?php
    require_once('html/header.php');
    require_once('html/nav.php');
    require_once('conexion.php');
    $sql = "SELECT id_rol, descripcion
            FROM roles";
    $respuesta = mysqli_query($conexion, $sql);

?>

<main class="container">
    <div class="row mt-4">
        <div class="col"></div>
        <div class="col">
            <form action="acciones/usuarioGuardar.php" method="post" class="card p-4">
                <h2 class="text-center"> Registro</h2>

                <div class="mb-2">
                    <label>Nombre</label>
                    <input name="nombre" type="text" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control">
                </div>
                <div class="mb-2">
                    <label>Rol</label>
                    <select name="id_rol" class="form-control">
                        <?php
                            while( $rol = mysqli_fetch_assoc($respuesta)){
                                $id_rol = $rol['id_rol'];
                                $descripcion = $rol['descripcion'];
                                echo("<option value='$id_rol'> $descripcion </option>");
                            }
                        ?>
                        
                    </select>
                </div>
                <div class="mb-2">
                    <label>Contraseña</label>
                    <input name="clave" type="password" class="form-control">
                </div>

                <button class="btn btn-success" type="submit">Registrarme</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</main>
<?php
    require_once('html/footer.php');
?>