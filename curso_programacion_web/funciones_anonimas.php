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
    <h1>Funciones Anonimas</h1>
    <section>
        <?php
            $mifuncion = function ()
            {
                echo "Hola soy una funcion anonima<br>";
            };
            $mifuncion();
        //Funcion anonima
            function crearSuma( $n )
            {
                return function($m) use ($n){
                    return $n + $m;
                };
            }
            $sumar10=crearSuma(10);
            echo $sumar10(10)."<br>";
            echo $sumar10(15)."<br>";
        $sumar50 = crearSuma(50);
        echo $sumar50(40)."<br>";
        //Multiplicacion con funciones anonimas
        function crearMultiplicacion($n)
        {
            return function ($m) use ($n){
                return "La multiplicacion de: $n X $m es ".($n*$m);
            };
        }
        $mulpor10 = crearMultiplicacion(10);
        echo $mulpor10(15);
        ?>

    </section>
</div>
<!--Jquery-->
<script src="public/js/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="public/js/bootstrap.min.js"></script>

</body>
</html>