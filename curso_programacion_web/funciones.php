<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tipo de datos</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <style>
        body {
            background-color: rgba(22, 99, 220, 0.78);
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
    <h1>Funciones</h1>
    <section>
        <?php
            function multPor5($num,$num2=5)
            {
                return $num*$num2;
            }
            function exponente( $n, $n2=2 )
            {
                return $n**$n2;
            }
            echo "Multiplicaion por 5: ".multPor5(10);
        echo "<br>Multiplicaion por 2: ".multPor5(10,2);
        echo "<br>Exponente: ".exponente(5,3)."<br>";

        //PASO DE PARAMETROS POR REFERENCIA
        echo "--Incremento--<br>";
        function incremento( &$n )
        {
            return ++$n;
        }
        $var1 = 3;
        $var2 = 2;
        echo "var1 => ".incremento( $var1 )."<br>";
        echo "var2 => ".incremento( $var2 )."<br>";
        echo "var1 => ".incremento( $var1 )."<br>";
        echo "var2 => ".incremento( $var2 )."<br>";

        //VARIABLES GLOBALES
        $nombre="Salvador";
        function fu()
        {
            global $nombre;
            return "Hola ".$nombre;
        }
        echo "<br>".fu();
        ?>
    </section>
</div>
<!--Jquery-->
<script src="public/js/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="public/js/bootstrap.min.js"></script>

</body>
</html>