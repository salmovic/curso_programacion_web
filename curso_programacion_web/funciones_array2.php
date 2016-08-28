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
           $id = '3575';
            $nombre = 'Salvador';
            $app = 'Morales';
            $edad = 23;
            $sexo='masculino';

        $array1 = ['apellido','edad','sexo'];
        //CONVIERTE EN UN ARREGLO ASOCIATIVO A LAS VARIABLES
            $persona1 = compact('id','nombre',$array1,'cualquiera');
            print_r($persona1);
            echo "<br>";

            echo str_repeat("--",40);

            $fruta = "pera";
            $array2 =["color"=>"verde",
                      "forma"=>"rectungular",
                      "fruta"=>"manzanas",
                        "carro","avion"
                        ];
            extract($array2,EXTR_PREFIX_INVALID,'pz');
        echo "<br>$fruta";
        echo "<br>$color";
        echo "<br>$forma";

        echo "<br>$pz_0"; //carro
        echo "<br>$pz_1"; //avion
        /*
         * EXTR_OVERGRITE => valor por defaultp, sobreescribe si una variable ya existe
         * EXTR_SKIP => deshabilita la sobrescritura de variables
         * EXTR_PREFIX_SAME => crea un variable con un prefijo dado
         * EXTR_PREFIX_ALL => crea todos los datos del array de variables con el prefijo dado
         * EXTR_PREFIX_INVALID => asigna prefijo solo a los valores del array no asociativos
         * EXTR_IF_EXISTS
         * EXTR_PREFIX_IF_EXISTES
         * EXTR_REFS
         * */
        ?>
    </section>
</div>
<!--Jquery-->
<script src="public/js/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="public/js/bootstrap.min.js"></script>

</body>
</html>