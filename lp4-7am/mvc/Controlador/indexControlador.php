<?php
class indexControlador extends Controlador
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->_vista->titulo = 'Portada de index';
        $this->_vista->renderizar('index');
    }

} 