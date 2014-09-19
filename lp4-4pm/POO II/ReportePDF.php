<?php

/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 19/09/14
 * Time: 05:36 PM
 */
abstract class ReportePDF
{

    abstract function options();

    //este metodo permite crear reporte PDF
    public function crearPDF()
    {
        $opciones = '';
        foreach($this->options() as $indice => $option)
        {
            $opciones .= $indice.' => '.$option.' ';
        }

        return 'estoy creando pdf con las siguentes opciones '.$opciones.', esperame';
    }
} 