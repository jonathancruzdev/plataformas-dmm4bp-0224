<?php
    $i = 1;
    while( $i <= 4 ){
        echo("Hola!");
        $i++;
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="bg-success text-white">
        <h1> App de Compras</h1>
    </header>
    <main class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <ul class="list-group">
                    <?php
                        //                0           1           2           3             4
                        $productos = ['Manzanas', 'Tomates', 'Galletitas', 'Azucar', 'Alfajores'];
                        $i = 0;

                        while( $i < count($productos) ){
                            echo("<li class='list-group-item'>$productos[$i]</li>");
                            $i++;
                        }

                    ?>
                </ul>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <button type="button" class="btn btn-success"> Agregar</button>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-white">
        <p> DV | Plataformas de Desarrollo | 2024</p>
    </footer>
</body>
</html>