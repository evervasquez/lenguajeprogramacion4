<?php

/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 28/09/14
 * Time: 08:06 PM
 */
require_once 'Dado.php';
class Jugador
{
    private $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function lanzar()
    {
        $dado = new Dado();
        return $dado->girar();
    }

    public function getNombre()
    {
        return $this->nombre;
    }
} 