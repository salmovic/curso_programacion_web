<?php require 'inc/header.inc';?>
<?php
/*
$a='';
//verifica si la variable esta vacia
if(empty($a)) {
    echo "La variable esta vacia<br>";
}*/
//establecer el tipo de una varible
/*$a="35brz";
$b=true;
echo gettype($a).": $a<br>";
echo gettype($b).": $b<br>";

settype($a,'integer');

echo gettype($a).": $a<br>";
echo gettype($b).": $b<br>";*/

/*
//VERIFICAR SI ES UN ARRAY
$a=[];
if( is_array( $a ) ) {
    echo "Es correcto";
}*/
/*
//VERIFICAR SI UNA VARIABLE ES NULL
$var=null;
if (!is_null($var)) {
    echo "La variable no es null";
}else {echo "la variable es null";}*/

//VERIFICAR SI UN OBJETO
$var = function(){return "hola";};
echo is_object( $var )?"Es un objeto<br>":"No lo es<br>";

//verificar si la variable existe
$exist=["a"=>"hola","b"=>null,"c"=>9];
//si el valor es null no esta definido
echo isset( $exist['c'] )?"Definido<br>":"No definido<br>";

//MOSTRAR EL VALOR DEL CONTENIDO DE LA VARIABLE
echo "<b>var_dump: </b>";
echo var_dump( $exist )."<br>";
echo "<b>var_export: </b>";
echo var_export( $exist )."<br>";
echo "<b>print_r: </b>";
echo print_r( $exist )."<br>";

//DESTRUIR UNA VARIABLE
$var2 = "Salvador";
function destruir() {
    
    unset( $GLOBALS['b'] );
}

$b =6;
destruir();
echo $b."<br>";





?>
<?php require 'inc/footer.inc';?>
