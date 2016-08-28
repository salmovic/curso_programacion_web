<?php require 'inc/header.inc'; ?>
<?php
echo '<h1>Encapsulamiento</h1>';
echo str_repeat('--',39)."<br>";
//-----------------------------
class Persona {
    private $nombre;
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
    //al heredar no se puede acceder al contenino
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
    // al heredar se puede acceder al contenido
    protected function ej () {
        echo "hola";
    }
    
}
//esta herencia solo hededa los metodos o atributos con el modificador de accesos public y protected 
class Hermana extends Persona {
    function __construct() {
        echo "Estoy sobreescribiendo a la clase padre";
    }
}

$yo = new Persona('Salvador','Morales',23);
$ella = new Hermana();
echo $ella -> getNombre();


?>
<?php require 'inc/footer.inc'; ?>