<?php

class Vista
{
    private $_controlador;

    public function __construct(Request $request)
    {
        $this->_controlador = $request->getControlador();
    }

    public function renderizar($vista, $item = false)
    {
        $ruta = ROOT . 'Vistas' . DS . $this->_controlador . DS . $vista . '.php';

        if (is_readable($ruta)) {
            include_once ROOT.'Vistas'.DS.'cabecera.php';
            include_once $ruta;
            include_once ROOT.'Vistas'.DS.'pie.php';
        } else {
            throw new Exception('Error de vista no encontrada');
        }
    }
} 