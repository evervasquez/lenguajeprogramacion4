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

    public function __construct($nombre)
    {
        $this->jugador= new Jugador($nombre);
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

$jugador1 = new Jugar('Juan');
echo $jugador1->imprimir();

$jugador2 = new Jugar('Carlos');
echo $jugador2->imprimir();

