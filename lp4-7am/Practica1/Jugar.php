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
    private $jugador;
    private $nombre;

    public function __construct($nombre)
    {
        $this->jugador = new Jugador($nombre);
    }

    public function comenzar()
    {
        return $this->jugador->lanzar();
    }

    public function imprimir()
    {
        return 'El jugador ' . $this->jugador->getNombre(). ' ha lanzado el dado : ' . $this->comenzar() . '</br>';
    }
}

$nombre1 = 'Juan';
$nombre2 = 'Carlos';

$jugador1 = new Jugar($nombre1);
echo $jugador1->imprimir();

$jugador2 = new Jugar($nombre2);
echo $jugador2->imprimir();
