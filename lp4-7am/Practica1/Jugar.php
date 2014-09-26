<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 26/09/14
 * Time: 08:30 AM
 */
require_once 'Jugador.php';

class Jugar
{
    public function comenzar($nombre)
    {
        $jugador = new Jugador($nombre);

        return $jugador->lanzar();
    }
}

$nombre1 = 'Juan';
$nombre2 = 'Carlos';

$jugador1 = new Jugar();
echo 'El jugador '.$nombre1.' ha lanzado el dado : '.$jugador1->comenzar($nombre1).'</br>';

$jugador2 = new Jugar();
echo 'El jugador '.$nombre2.' ha lanzado el dado : '.$jugador1->comenzar($nombre2);
