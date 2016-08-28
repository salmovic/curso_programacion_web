<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tipo de datos</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<style>
        body {
            background-color: rgba(220,20,60,0.78);
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
            $nombre = 'Gilbert';
        $edad = 25;
        $miedad2= &$edad;
        $age=$miedad2=21;
        echo "mi nombres es: $edad y tengo $age";
        ?>
    </section>
<!--Jquery-->
<script src="public/js/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="public/js/bootstrap.min.js"></script>

</body>
</html>