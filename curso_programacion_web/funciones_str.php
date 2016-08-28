
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
        function br ()
        {
            echo "<br>";
        }
        $frase = "El veloz muciélago hindú, comía feliz, cardillo y wiki";
        //explode(caracter de separacion, textpo, cant max del array)
       /* $frase_array = explode(' ',$frase);

        print_r($frase_array);

        $frase_string = implode(',',$frase_array);
        echo "<br>$frase_string";*/
       //Primer ltra mayuscula
       /*echo lcfirst($frase);
        //retira espacios en blanco inicio al final
        echo trim($frase);

        //md5 encriptar contrasenia
        echo md5($frase);
*/
        //convierte un string en variable
        $base ="mivariable=este es el valor&var2=otro valor&arr[]=val1&arr[]=val2";
        /*parse_str($base);
        br();
        echo $mivariable;
        br();
        echo $var2;
        br();
        foreach ($arr as $i)
            echo $i; br();*/
        /*br();
        echo $frase; br();
        $result = str_replace('feliz', 'trizte', $frase, $cont );
        echo $result." afectados ".$cont;
        */

        //echo str_repeat("Repetir 5 veces<br>",5);
        /*
        $frese_desordenado = str_shuffle($frase); br();
        echo $frese_desordenado;
        */
/*
        $arr1 = str_split($frase);
        $arr2 = str_split($frase,8);
        print_r($arr2);
*/
        //longitud de caracteres
        //echo strlen($frase);
        echo strrev($frase); //reversa
        echo strtolower($frase); //minuscula
        echo strtoupper($frase); //mayuscula
        br();br();


        ?>


    </section>
</div>
<!--Jquery-->
<script src="public/js/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="public/js/bootstrap.min.js"></script>

</body>
</html>