<?php require 'inc/header.inc'; ?>
<?php
echo '<h1>INterfaz</h1>';
echo str_repeat('--',39)."<br>";
//-----------------------------
interface Test {
    public function decirHola();
    const B = 5;
}
interface Test2 extends Test {
    public function decirMundo();
}
interface Test3 extends Test, Test2 {
    
}
class Prueba implements Test3 {
    public function decirHola() {
        return "Hola ";
    }
    public function decirMundo() {
        return "Mundo";
    }
}

$a = new Prueba();
echo $a -> decirHola();
echo $a -> decirMundo()."<br>";
echo Test::B;

?>
<?php require 'inc/footer.inc'; ?>