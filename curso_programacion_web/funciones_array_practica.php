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
        $persona = [
            3575 => ["id"=>"3575",
                    "nombre"=>"Salvador",
                    "app"=>"Morales",
                    "edad"=>25,
                    "sexo"=>"masculino"
            ],
            3577 => ["id"=>"3577",
                "nombre"=>"Jose",
                "app"=>"Ynies",
                "edad"=>21,
                "sexo"=>"masculino"
            ],
            3579 => ["id"=>"3579",
                "nombre"=>"Martha",
                "app"=>"Godinez",
                "edad"=>23,
                "sexo"=>"femenino"
            ],
            3576 => ["id"=>"3576",
                "nombre"=>"Rafael",
                "app"=>"Dominguez",
                "edad"=>25,
                "sexo"=>"masculino"
            ],
            3578 => ["id"=>"3578",
                "nombre"=>"Benjamin",
                "app"=>"Demencio",
                "edad"=>45,
                "sexo"=>"masculino"
            ],
        ];        

        function p_sort( $array, $etiqueta, $orden=SORT_ASC)
        {
            $nuevo_array= [];
            $ordenamiento_array=[];
            if( count($array)>0 )  
            {
                //analiza id del arreglo
                foreach( $array as $c => $v )
                {
                    //verificamos si el valor de v es un array
                    if( is_array( $v ) )
                    {
                        foreach( $v as $c2 => $v2 )
                        {
                            if( $c2==$etiqueta )
                            {
                                $ordenamiento_array[$c]=$v2;
                            }
                        }
                    }else //si no es un array solo toma el valor de la clave y le asigna al array
                    {
                       $ordenamiento_array[$c]=$v;     
                    }
                }
                switch($orden)
                {
                    case SORT_ASC:
                        asort($ordenamiento_array);
                        break;
                    case SORT_DESC:
                        arsort($ordenamiento_array);
                        break;
                }
                foreach ($ordenamiento_array as $c3=>$v3)
                {
                    $nuevo_array[$c3]=$array[$c3];
                }
            }
            return $nuevo_array;
        }
        
        $f = p_sort($persona,"nombre",SORT_DESC);
        
        foreach ($f as $c=>$v)
        {
            echo str_repeat("--",40);
            echo "Identificacion $$c<br>";
            echo str_repeat("--",40);
            
            foreach ( $v as $c1 => $v1 )
            {
                echo "$c1 : $v1<br>";
            }
            echo "<br>";
            
        }

        ?>
    </section>
</div>

</body>
</html>