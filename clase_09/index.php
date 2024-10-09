<?php
    require_once('datos.php');


    require_once('html/header.php');
    require_once('html/nav.php');

?>



    <main>
        <div class="row ">

            <?php

                for($i=0; $i < count($productos) ; $i++){
                    $nombre = $productos[$i]['nombre'];
                    $precio = $productos[$i]['precio'];
                    $foto = $productos[$i]['foto'];
    
                    echo("<div class='card col-md-3'>
                            <img src='$foto' class='card-img-top' alt='$nombre'>
                            <div class='card-body'>
                                <h5 class='card-title'>$nombre</h5>
                                <p class='card-text'>$precio</p>
                                <a href='detalle.php' class='btn btn-primary'>Ver mas</a>
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