<?php require 'inc/header.inc'; ?>
<?php
echo '<h1>Auto Cargar Clases</h1>';
echo str_repeat('--',39)."<br>";
//-----------------------------
/*function autocargar_clases( $clase ) {
	require "lib/$clase.php";
}*/
require 'lib/CargarClases.php';

$b = new Mundo();
$b -> decirMundo();

?>
<?php require 'inc/footer.inc'; ?>