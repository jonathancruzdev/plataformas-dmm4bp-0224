<?php
    // 1. importo la conexión con la DB
    require_once('conexion.php');
    require_once('html/header.php');
    require_once('html/nav.php');

    // leemos la variable por GET
    if( isset( $_GET['id_categoria'])){ // Verifico si se paso una categoria
        $id_categoria = $_GET['id_categoria'];
        $sql = "SELECT p.id_producto, p.nombre, p.foto, p.precio, c.nombre AS categoria, p.id_categoria
                FROM productos p
                INNER JOIN categorias c ON p.id_categoria = c.id_categoria
                WHERE p.id_categoria = $id_categoria";  

    } else {
        $sql = "SELECT p.id_producto, p.nombre, p.foto, p.precio, c.nombre AS categoria, p.id_categoria
                FROM productos p
                INNER JOIN categorias c ON p.id_categoria = c.id_categoria";    
    }



    // 3- Ejecuto la consulta SQL
    $respuesta = mysqli_query($conexion, $sql);

?>
    <main>
        <div class="row d-flex justify-content-evenly m-3">
            <?php
                // 4. Convertimos la respuesta a un array
                while( $producto = mysqli_fetch_assoc($respuesta)){
                    $id_producto = $producto['id_producto'];
                    $nombre = $producto['nombre'];
                    $precio = $producto['precio'];
                    $foto = $producto['foto'];
                    $categoria = $producto['categoria'];
                    $id_categoria = $producto['id_categoria'];
                    echo("<div class='card col-md-3'>
                            <img src='$foto' class='card-img-top' alt='$nombre'>
                            <div class='card-body'>
                                <h5 class='card-title'>$nombre</h5>
                                <span class='badge text-bg-success'>$categoria</span>

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