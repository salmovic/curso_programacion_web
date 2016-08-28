<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tipo de datos</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<style>
        body {
            background-color:darkturquoise;
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
       <h1>Constantes</h1>
    <section>
       
        <?php
            //true = sensitive case
            define( "CAJA", "Hola Mundo",true );
            define( "AGE", 23, true );
            echo CAJA." AGE ".age;
        
            echo "Exponenciacion en PHP 5^3 (4**3)";
            echo 5**3;
        ?>
    </section>
    <h1>Arrays</h1>
    <section>
        <?php
        //Arreglos normal
        $frutas = ['Manzana','pera','hola',34,true];
        echo $frutas[3];
        //arreglos asociativos
        $edad = ['Salvador'=>23,'javi'=>32,'chipo'=>32];
        echo "<br>".$edad['Salvador'];
        //add
        $edad['calamardo']=43;
        echo "<br>Edad {$edad['calamardo']}";
        ?>
    </section>
   </div>
<!--Jquery-->
<script src="public/js/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="public/js/bootstrap.min.js"></script>

</body>
</html>