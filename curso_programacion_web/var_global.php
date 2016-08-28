<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tipo de datos</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <style>
        body {
            background-color: #0e9adc;
            font-family: Helvetica;
            margin: 0;
            padding: 0;
            padding-top: 100px;
        }
        section {
            background-color: white;
            border: 2px solid black;
            height: auto;
            max-width: 450px;
            height: auto;
            padding: 20px;
            box-sizing: border-box;
            color: black;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Variables Globales</h1>
    <section>
        <?php
        /*    $nombre = 'Salvador';
            function saludo()
            {
                global $nombre;
                return "Hola ".$nombre;
            }
            echo saludo();
        */
        $a=1;
        $b="Salvador";
        $c=5;
        $d=true;
        $e='Hola';
        echo $GLOBALS['e'];

        $variable="Hola Mundo";
        function decirHola()
        {
            echo $GLOBALS['variable'];
        }
        echo "<br>";
        decirHola();
        ?>
    </section>
</div>
<!--Jquery-->
<script src="public/js/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="public/js/bootstrap.min.js"></script>

</body>
</html>