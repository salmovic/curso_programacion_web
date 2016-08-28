<?php require 'inc/header.inc'; ?>
<?php
echo "<h1>_construct && _destruct</h1>";
echo str_repeat('--',39)."<br><br>";
//-----------------------------------
class Persona 
{
    private $nombre;
    private $app;
    
    public function __construct($n=null,$a=null) {
     $this->nombre = $n;
        $this->app=$a;
    }
    
    public function getNombre () {
        return $this->nombre;        
    }
    public function getApp () {
       return $this->app;
    }
    
    protected function saludo( $msj ) {
        return "Hola ".$msj;
    }
    
   /* public function __destruct () {
        echo "la clase ha salido en memoria";        
    }*/
}
class Empleado extends Persona
{
    public function __construc () {
        
    }
}

$yo = new Persona("Javier","A mira, que barbaro");
$em = new Empleado();

echo $yo->getNombre()."<br>";
echo $yo->getApp()."<br>";



//unset($yo); // activa el destruct


?>
<?php require 'inc/footer.inc'; ?>