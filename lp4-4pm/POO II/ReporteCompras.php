<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 19/09/14
 * Time: 05:42 PM
 */
require_once 'ReportePDF.php';
class ReporteCompras extends ReportePDF{
    function options()
    {
        $options = [
            'orientacion' => 'L',
            'font-size' => '11px',
            'font' => 'Tahoma',
            'titulo' => 'Reporte de Compras'
        ];

        return $options;
    }

}

$repoCompras = new ReporteCompras();
echo $repoCompras->crearPDF();