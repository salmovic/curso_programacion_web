
<?php require 'inc/header.inc'; ?>
<?php
echo '<h1>Final</h1>';
echo str_repeat('--',39)."<br>";
//-----------------------------
final class Padre {
    //especifica que el metodo no puede ser modificado
   final public function test() {
        echo 'Esto es una prueba<br>';
    }
}
class Hija extends Padre {
   /*
    public function test() {
        echo 'Estamos modificando el metodo de la clase padre<br>';
    }*/
}
$a = new Padre();
$b = new Hija();

$a->test();
$b->test();
echo "HOla";

?>
<?php require 'inc/footer.inc'; ?>