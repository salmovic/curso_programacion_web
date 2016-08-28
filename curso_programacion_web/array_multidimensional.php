<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tipo de datos</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<style>
        body {
            background-color:aqua;
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
       <h1>Arrays Multidimencionales</h1>
        <section>
        <?php
              $frutas = [ ["Manzana","Mango"],
                         ["Limno","Naranja",[
                             "Mango bichi","uvas verdes",[
                                 [
                                     [
                                         ["cualquier cosa"]
                                     ]
                                 ]
                             ]
                         ] ] ];
                echo $frutas[1][2][2][0][0][0][0]."<br>";
            
            $frutas2 = ["precios" => [
                "Manzana"=>5,
                "Pera"=>2.5,
                "pinia"=>8
            ]];
            echo $frutas2["precios"]["Manzana"];
        ?>
        </section>
   </div>
<!--Jquery-->
<script src="public/js/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="public/js/bootstrap.min.js"></script>

</body>
</html>