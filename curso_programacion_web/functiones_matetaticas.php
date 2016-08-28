<?php require 'inc/header.inc';?>
<?php
 $a = 5.539040497;
//redondear hacia arriba
echo ceil($a)."<br>";
//redondeo hacia abajo
echo floor($a)."<br>";
//redondeo avanzado
echo round($a,2)."<br>";


// PHP_ROUND_HALF_UP =ceil
// PHP_ROUND_HALF_DOWN = floor
// PHP_ROUND_HALF_EVEN = redondea hacia arriba si se convierte a par
// PHP_ROUND_HALF_ODD = redondea si el numero es impar

echo round(10.5,0,PHP_ROUND_HALF_ODD)."<br>";

//valor pi
echo pi()."<br>";
echo M_PI."<br>";

//raiz cuadrada
echo sqrt(11)."<br>";

//exponente
echo pow(5,3)."<br>";
echo 5**3;

//Generar numero aleatorio (min,max)
echo rand(1,15)."<br>";
//mayor valor aleatorio posible
echo getrandmax()."<br>";

//sustituto de rand (min,max)
echo mt_rand(2,4)."<br>";
echo mt_getrandmax()."<br>";

//NUMERO MINIMO DE LOS NUMERO 
$arr = [3,4,45,0,5,-3];
echo min($arr)."<br>";
//NUMERO MAXIMO DE LOS NUMERO 
echo max($arr)."<br>";

//VALOR ABSOLUOT
echo abs($arr)."<br>";
?>
<?php require 'inc/footer.inc';?>
