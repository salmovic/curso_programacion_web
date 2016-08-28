<?php require 'inc/header.inc'; ?>
<?php
echo '<h1>Encapsulamiento</h1>';
echo str_repeat('--',39)."<br>";
//-----------------------------
class Persona {
    protected $nombre;
    protected $apellidos;
    protected $edad;
    
    public function __construct($no,$app,$ed) {
        $this -> nombre = $no;
        $this -> apellidos= $app;
        $this -> edad = $ed;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre( $nom ) {
        $this->nombre = $nom;
    }
    
    private function metodo1() {
        echo "soy el metodo 1<br>";
    }
    private function metodo2() {
        echo "Soy el metodo2<br>";
    }
    
    public function ejecutar () {
        $this ->metodo1();
        $this ->metodo2();
    }
}
$yo = new Persona('Salvador','Morales',23);
echo $yo -> getNombre()."<br>";
$yo->setNombre('Aquiles');
echo $yo -> getNombre()."<br>";

$yo->ejecutar();
?>
<?php require 'inc/footer.inc'; ?>