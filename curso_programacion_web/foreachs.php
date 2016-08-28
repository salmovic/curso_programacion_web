<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tipo de datos</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<style>
        body {
            background-color: rgba(14, 154, 220, 0.78);
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
    <section>
        <?php
			$colores = ["Rojo","Azul","Naranja","Negro"];
			echo "<h1>Foreach normal</h1>";
			foreach ($colores as $thecolor )
			{
				echo "$thecolor<br>";
			}
			echo "<h1>foreach asociativo</h1>";
			$persona = ["nombre"=>"Salvador","app"=>"Morales",
						"edad"=>23,"email"=>["morivicsal@gmail.com","mv.salvador93@gmail.com","yo@yo.com"]];
			foreach ($persona as $val=>$in)
			{
				switch ($val){
					case "email":
						echo "<h5><strong>Correos</strong></h5>";
						foreach ($in as $mail)
						{
							echo "$mail<br>";
						}

						break;
					default:
						echo "$in<br>";
						break;
				}
			}
		?>
    </section>
<!--Jquery-->
<script src="public/js/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="public/js/bootstrap.min.js"></script>

</body>
</html>