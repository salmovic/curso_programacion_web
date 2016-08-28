<?php require 'inc/header.inc'; ?>
<?php
echo '<h1>Encapsulamiento</h1>';
echo str_repeat('--',39)."<br>";
//-----------------------------
class Persona {
    private $nombre;
    private $apellidos;
    private $edad;
    public $colorOjos = "azul";
    public static $colorPiel = 'Claro';
    
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
    public static function hola() {
        echo "Hola statico<br>";
    }
    public function ejecutar () {
        //permite acceder al metodo estatico dentro de la clase
         self::hola();
    }
    
}
class Hermana extends Persona {
    public function excecute () {
        //usando una variable estatica desde la clase padre
        return parent::$colorPiel;
    }   
}

$p = new Persona("Salvador","Morales",23);
echo $p->ejecutar();
$h = new Hermana('Lulu',"Morales",28);

echo $h -> excecute();

/*
echo Persona::$colorPiel."<br>";
echo Persona::hola();*/

?>
<?php require 'inc/footer.inc'; ?>