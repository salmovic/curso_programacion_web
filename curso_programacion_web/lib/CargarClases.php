<?php 
spl_autoload_register(function ($clase) {
	require "lib/$clase.php";	
});

$a = new Hola();
$a -> decirHola();