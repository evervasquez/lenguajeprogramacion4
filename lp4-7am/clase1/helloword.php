<?php
//creado
$tipo = 7.35;

//modificamos
$tipo = 'hola';

$uno = 'Mundo';

//contatenar
$var1 = "hola $uno";

//concatenado
$uno = 'Hola '.$uno;

//global $nombre_del_sitio = 'Foros del Web';
/*imprimimos*/

$variable1 = 10;

$variable2 = 20;

$variable3 = $variable2;

$variable3 = $variable1;

$variable1 = '0.75';

$variable2 = 0.75;

//comparacion solo de las varibales
if($variable1 == $variable2){
    $uno = 'paso';
}else{
    $uno = 'no paso';
}

//comparacion solo de las varibales + tipo de dato
if($variable1 === $variable2){
    $uno = 'paso';
}else{
    $uno = 'no paso';
}

//comparacion con and
if($variable1 === $variable2 && $variable3 === $variable1){
    $uno = 'paso';
}else{
    $uno = 'no paso';
}
$a = 'uno';
$b = 'uno1';

if($a !=$b  Xor $b==$a)
{
    $uno = 'Xor';
}
//negación
!$a;
echo $uno;