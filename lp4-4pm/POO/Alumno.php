<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 12/09/14
 * Time: 05:26 PM
 */
require_once 'Personas.php';
class Alumno extends Personas{

    public function AlumnoCaminando()
    {
        $this->caminar();
    }

    public function estudiar()
    {
        echo 'estoy estudiando';
    }
}

$alumno = new Alumno();
$alumno->estudiar();