<?php

/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 28/09/14
 * Time: 08:04 PM
 */
class Dado
{
    private $valor = 0;

    public function girar()
    {
        return $this->valor = rand(1, 6);
    }
}