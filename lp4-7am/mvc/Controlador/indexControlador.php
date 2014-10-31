<?php
class indexControlador extends Controlador
{

    public function __construct()
    {
        parent::__construct();
    }

    //metodo para llamar al controller index
    public function index()
    {
        $this->_vista->setJs(array('funcion'));
        $this->_vista->setCss(array('nuevo','custom'));
        $this->_vista->titulo = 'Portada de index';
        $this->_vista->renderizar('index');
    }

} 