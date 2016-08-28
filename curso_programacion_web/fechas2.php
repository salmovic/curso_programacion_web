<?php require 'inc/header.inc'; ?>

<?php
 date_default_timezone_set('America/Mexico_City');
    echo "<h1>Fechas v2</h1>";
    echo str_repeat("--",35)."<br><br>";
//--------------------------------------
/*$meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
$diaS = ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
//fecha de nacimiento (mes,dia,anio)
$cumple = mktime( 0,0,0,02,11,1993 ); 
$hoy = time(); //tiempo transcurrido en segundos
$edad = $hoy - $cumple
$fecha = getdate($cumple);

$diaNacimiento = $diaS[$fecha['wday']];
$diaNum = $fecha['mday'];
$anio = $fecha['year'];
$meseNacimiento = $meses[$fecha['mon']-1];
echo $hoy;
echo "<p>Naciste un dia $diaNacimiento $diaNum de $meseNacimiento de $anio</p>";

echo "<p>Has vivido aproximadamente ".floor(($edad/60/60/24))." dias<p>";

echo "<p>Tu edad es aproximadamente ".floor(($edad/60/60/24/365))." anios</p>";*/

$fecha = "1/9/2016";
$f = explode("/",$fecha);
if ( count( $f ) !=3 ) { 
    echo "Por facor ingrese una fecha correcta, ejemplo: mm/dd/aaaa - 5/15/216";
    exit();
} elseif (checkdate($f[1],$f[0],$f[2])==false) {
    echo "Fecha esta erronea, por favor confirmarla";
    exit();
} else {
    echo "fecha correcta!!";
}

?>

<?php require 'inc/footer.inc'; ?>