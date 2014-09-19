<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 19/09/14
 * Time: 05:27 PM
 */
require_once 'Animal.php';

class Leon extends Animal
{
    private $estado;

    public function __construct($estado)
    {
        $this->estado = $estado;
    }

    function gemir()
    {
        return $this->estado;
    }

}

$leon = new Leon('guaaaaaa');
echo $leon->estadoAnimal();