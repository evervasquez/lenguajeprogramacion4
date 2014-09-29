<?php

require_once 'Jugador.php';

class Jugar
{
    private $jugador;
    private $color;
    public $valor;

    public function __construct($nombre, $color)
    {
        $this->jugador = new Jugador($nombre);
        $this->color = $color;
    }

    public function comenzar()
    {
        $this->valor = $this->jugador->lanzar();
        return $this->valor;
    }

    public function imprimir()
    {
        return 'El jugador ' . $this->jugador->getNombre() . ' ha lanzado el dado : ' . $this->color . ' saco ' . $this->comenzar() . '</br>';
    }

}

$nombre1 = 'juan';$dado1 = 'rojo';
$jugador1 = new Jugar($nombre1, $dado1);
$valor1 = $jugador1->valor;
echo $jugador1->imprimir();

$nombre2 = 'miguel';$dado2 = 'azul';
$jugador2 = new Jugar($nombre2, $dado2);
$valor2 = $jugador2->valor;
echo $jugador2->imprimir();


$nombre3 = 'franz';$dado3 = 'verde';
$jugador3 = new Jugar($nombre3, $dado3);
$valor3 = $jugador3->valor;
echo $jugador3->imprimir();

if ($jugador1->valor > $jugador2->valor) {
    if ($jugador1->valor > $jugador3->valor) {
        $gana = $nombre1;
    } else {
        $gana = $nombre3;
    }
} elseif ($jugador2->valor > $jugador3->valor) {
    $gana = $nombre2;
} else {
    $gana = $nombre3;
}

echo '<h1>el ganador es ' . $gana.'</h1>';