<?php
    // Esto es un comentario
    $nombre = "Jonathan";
    $apellido = "Cruz";
    //echo("Hola desde PHP ");
    //echo (" Soy " . $nombre );
    // Las comillas dobles interpretan las variables
   // echo("<h1> Mi apellido es $apellido </h1>");
   // echo(' Mi apellido es $apellido');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        header {
            height: 20vh;
        }
        main {
            min-height: 80vh;
        }
        footer {
            height: 10vh;
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white d-flex justify-content-center align-items-center">
        <h1> Clase 05 - Introducción a PHP</h1>
    </header>
    <main class="container">
        <?php
            echo("<h2> $nombre </h2> ");
            echo('<h4> Apellido: ' . $apellido . '</h4>');
            $numero1 = 2;
            $numero2 = 4;
            $suma = $numero1 + $numero2;
            //echo("<p> $suma </p>");
        ?>

        <div class="alert alert-info">
            <strong>Resultado: <?php echo($suma); ?> </strong>
        </div>
    </main>
    <footer class="bg-dark text-white d-flex justify-content-center align-items-center">
        <p> DV | Plataformas de Desarrollo | 2024</p>
    </footer>

</body>
</html>