<?php

/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 19/09/14
 * Time: 05:06 PM
 */
class CalculadoraEuro
{
    private $dolar_euro;

    public function __construct($dolar_euro)
    {
        $this->dolar_euro = $dolar_euro;
    }

    public function convertirDolarEuro($dolares)
    {
        return $dolares.' dolares son en Euros '.$this->dolar_euro*$dolares;
    }
}

$euros = new CalculadoraEuro(0.7);
echo $euros->convertirDolarEuro(5);