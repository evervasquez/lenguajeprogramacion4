<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 12/09/14
 * Time: 10:45 AM
 */
require_once 'Persona.php';
class Docente extends Persona{

    public function enseniar()
    {
        echo $this->caminar()." estoy enseniando ".$this->talla;
    }

}

$docente = new Docente();
$docente->enseniar();