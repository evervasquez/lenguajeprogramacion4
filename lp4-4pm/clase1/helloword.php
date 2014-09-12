<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 12/09/14
 * Time: 04:10 PM
 */
$variable1 = 'hola mundo';
$variable2 = 'en Tarapoto';

$var = '1.72'; //cadena
$var1 = 1.72;   //float

if($var === $var1){
 $variable2 = 'En moyobamba';
    $variable2 = 5;
}else{
    $variable2 = 'En Tarapoto ';

}

if(is_float($var))
{
    $variable2 = 'soy un float';
}

echo $variable1.' '.$variable2;