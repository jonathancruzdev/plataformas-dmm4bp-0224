<?php
    // 1. importo la conexión con la DB
    require_once('conexion.php');
    require_once('html/header.php');
    require_once('html/nav.php');
    // 2.Escribo la consulta SQL
    $sql = "SELECT id_producto, nombre, foto, precio
            FROM productos";    
    // 3- Ejecuto la consulta SQL
    $respuesta = mysqli_query($conexion, $sql);

?>


    <main>
        <div class="row ">

            <?php
                // 4. Convertimos la respuesta a un array
                while( $producto = mysqli_fetch_assoc($respuesta)){
                    $id_producto = $producto['id_producto'];
                    $nombre = $producto['nombre'];
                    $precio = $producto['precio'];
                    $foto = $producto['foto'];
    
                    echo("<div class='card col-md-3'>
                            <img src='$foto' class='card-img-top' alt='$nombre'>
                            <div class='card-body'>
                                <h5 class='card-title'>$nombre</h5>
                                <p class='card-text'>$precio</p>
                                <a href='detalle.php?id_producto=$id_producto' class='btn btn-primary'>Ver mas</a>
                            </div>
                        </div>");
                }


            ?>
           <!--  
            <div class="card col-md-3">
                <img src="<?php echo($foto); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo($nombre); ?></h5>
                    <p class="card-text"><?php echo($precio); ?></p>
                    <a href="detalle.php" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
-->

           
        </div>
    </main>
<?php
    require_once('html/footer.php');
?>