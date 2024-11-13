<?php
    require_once('conexion.php');
    require_once('html/header.php');
    require_once('html/nav.php');
    $id_producto = $_GET['id_producto'];
    $sql = "SELECT nombre, descripcion, foto, precio, id_categoria
            FROM productos
            WHERE id_producto = $id_producto";
    // Ejecuto la consulta
    $respuesta = mysqli_query($conexion, $sql);
    $producto = mysqli_fetch_assoc($respuesta); // Convierto a un array

    $nombre = $producto['nombre'];
    $descripcion = $producto['descripcion'];
    $precio = $producto['precio'];
    $foto = $producto['foto'];
    $id_categoria = $producto['id_categoria'];
    // Realizamos una consulta con los comentarios que son del producto (WHERE)
    $sqlComentarios =  "SELECT c.fecha, c.detalle, u.id_usuario, u.nombre
                        FROM comentarios c
                        INNER JOIN usuarios u ON u.id_usuario = c.id_usuario
                        WHERE id_producto = $id_producto";
    $respuestaComentarios = mysqli_query($conexion, $sqlComentarios);
?>
    <main>
        <div class="row ">
            <div class="col-md-6">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo($foto); ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/notebook2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/notebook3.jpg" class="d-block w-100" alt="...">
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                </div>
            </div>
            <div class="col-md-6">
                <h2><?php echo($nombre); ?></h2>
                <p> <?php echo($descripcion); ?></p>
                <hr>
                <h4>Comentarios</h4>
                <ul class="list-group">
                    <?php
                        while( $comentario = mysqli_fetch_assoc($respuestaComentarios)){
                            $fecha = $comentario['fecha'];
                            $detalle = $comentario['detalle'];
                            $id_usuario = $comentario['id_usuario'];
                            $nombre = $comentario['nombre'];
                            echo("<li class='list-group-item'><strong>$nombre</strong>: $detalle </li>");
                        }
                    ?>
                </ul>
                <?php
                    if( isset($_SESSION['id_usuario'])){
                ?>
                    <form action="acciones/comentarioGuardar.php?id_producto=<?php echo($id_producto);?>" method="post" class="p-3">
                        <textarea class="form-control" name="detalle" cols="30" rows="6"></textarea>
                        <button type="submit" class="btn btn-primary mt-2">Publicar</button>
                    </form>
                <?php
                    } else {
                        echo("<h4> Iniciar sesión para Comentar<h4>");
                    }
                ?>
   
            </div>
            
        </div>

    </main>
<?php
    require_once('html/footer.php');
?>