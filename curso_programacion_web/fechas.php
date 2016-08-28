<?php require 'inc/header.inc';?>
<?php 
//configuracion de la zona horaria del pais
echo date_default_timezone_set("America/Mexico_City");

echo "<h1>Fechas</h1>";
echo str_repeat("<b>+</b>",50)."<br><br>";
//--------------------------------------

 echo time()."<br>";
//dia del mes
echo date('d F Y')."<br>";
//fecha hora
echo date('d F Y')." ".date('g:i:s a')."<br>";

$dia = date('l');
$diaN = date('d');
$mes = date('F');
$anio = date('Y');
$hora = date('g');
$min = date('i');
$seg = date('s');
$meridiano = date('a');

echo "Hoy es $dia $diaN del $mes de $anio y son las $hora:$min:$seg $meridiano";

$fecha = getdate();
print_r($fecha);

echo date_default_timezone_get();

//obtener lista de zonas de horario
$zona = DateTimeZone::listIdentifiers();
echo "<br>";
$i=0;
foreach ($zona as $z) {
    $i++;
    echo "$i=> $z<br>";
}
    

?>
<?php require 'inc/footer.inc';?>