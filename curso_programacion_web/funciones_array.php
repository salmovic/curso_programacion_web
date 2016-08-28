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
            $color = ["zalmon","verde","azul","rojo","amarillo",'25'];
            $a = ["f","c","g","a","e"."b","d"];
            $frutas = ["d"=>"pera","b"=>"mango","e"=>"banana","a"=>"coco","f"=>"aceituna"];

        //echo count($color)."<br>"; //cuenta eltos
       /* if (in_array( 25,$color, true )) //modo strict
        {
            echo "Se ha encotrnado la palabra";
        }else{
            echo "No se ha encontrado";
        }*/

       /*echo "antes<br>";
        print_r($color);
        echo "<br>despues<br>";

        //agrega al inicio del array uno o mas eltos

        array_unshift($color,"gris",30,"negro");
        print_r($color);
        echo "<br>".str_repeat("--",40)."<br>";

        //elimina un elto que esta ubicado al inicio del array

        array_shift($color);

        //agrega uno o mas elementos al final del array

        echo array_push($color,'rosa');

        //elimina un elemento que esta al final del array
        array_pop($color);
        //imprimr array
        print_r($color);
        */

       //BUSCAR UN ELTO POR LA CLAVE
        /*if ( array_key_exists("b",$frutas) )
        {echo "Existe";
        }else { echo "No existe";}*/

        //BUSCA EL ELEMENTO ASIGNADO Y RETORNA SU KEY
        echo array_search('pera',$frutas,true);



        ?>
    </section>
</div>
<!--Jquery-->
<script src="public/js/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="public/js/bootstrap.min.js"></script>

</body>
</html>