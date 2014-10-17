<?php

abstract class Controlador
{
    protected $_vista;

    abstract public function index();

    public function __construct()
    {
        $this->_vista = new Vista(new Request());
    }


}