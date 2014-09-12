<?php
require_once('Persona.php');
class Alumno extends Persona{

    public function caminaAlumno()
    {
        echo $this->talla;
    }

    public function estudia()
    {
        echo 'estoy estudiando';
    }
}

$alumno = new Alumno();
$alumno->estudia();