<?php namespace carpeta1; ?>
<?php require 'inc/header.inc'; ?>
<?php
class Persona {
	public function decirHola () {
		return "Hola<br>";
	}
}
$a = new Persona();
echo $a -> decirHola();

namespace carpeta2;
class Persona {
	public function decirHolaMundo () {
		return "Hola Mundo<br>";
	}
}
$b = new Persona();
echo $b -> decirHolaMundo();
?>
<?php require 'inc/footer.inc'; ?>