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
        /**
         * @param $ars
         * @param null $callback
         */
        function escribir ($ars, $callback=null )
            {
                echo "$ars<br>";
                if ($callback!=null)
                {
                    if (gettype($callback)=='object')
                    {
                        $callback();
                    }else{
                        echo "No estas pasando una funcion como parametro";
                        exit();
                    }
                }
            }
            $var = function (){
                echo "Hola function";
            };
            escribir("Hola",$var)
        ?>
    </section>
</div>
<!--Jquery-->
<script src="public/js/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="public/js/bootstrap.min.js"></script>

</body>
</html>