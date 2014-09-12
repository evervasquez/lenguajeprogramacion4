<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 12/09/14
 * Time: 09:14 AM
 */
$sistema_operativo = 'Mac OS X';

$var = utf8_decode('diseñar');
switch($sistema_operativo) {
    case 'Windows':   // Podemos incluir comentarios
        echo 'Su sistema lo inventó <strong>Bill Gates</strong><br />';
        echo 'y sirve mucho para jugar solitario.';
        break; //este comando sirve para finalizar el condicional
    case 'Linux':
        echo 'Su sistema fue creado a partir del código de Linus Torvalds.';
        break;
    default: //cualquier otro valor no especificado en los case
        echo 'Hay un mito con las computadoras creadas por Apple<br />';
        echo "que dice que solo sirven para $var, pero no es cierto.";
}