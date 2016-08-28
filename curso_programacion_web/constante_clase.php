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
    
    const DEDOSMANOS = 10;
    
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
    public function decirDedos() {
        return self::DEDOSMANOS;
    }
    
    
}
class Hermana extends Persona {
    public function excecute () {
        //usando una variable estatica desde la clase padre
        return parent::$colorPiel;
    }  
    public function constante () {
        return parent::DEDOSMANOS;
    }
}

$p = new Persona("Salvador","Morales",23);
$h = new Hermana('Lulu',"Morales",28);

echo Persona::DEDOSMANOS."<br>";
echo $p->decirDedos()."<br>";

echo $h->constante()."<br>";
?>
<?php require 'inc/footer.inc'; ?>