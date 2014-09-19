<?php

/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 19/09/14
 * Time: 05:39 PM
 */
require_once 'ReportePDF.php';

class ReporteVentas extends ReportePDF
{
    function options()
    {
       $options = [
           'orientacion' => 'V',
           'font-size' => '12px',
           'font' => 'Arial',
           'titulo' => 'Reporte de Ventas'
       ];

        return $options;
    }

}

$repoVentas = new ReporteVentas();
echo $repoVentas->crearPDF();