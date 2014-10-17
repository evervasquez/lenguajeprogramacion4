<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 17/10/14
 * Time: 05:12 PM
 */

class ventasControlador extends Controlador{

    public function index()
    {
        echo 'estoy en ventas';
    }

    public function nuevo()
    {
        echo 'ventas/nuevo';
    }

    public function editar($id)
    {
        echo $id;
    }
} 