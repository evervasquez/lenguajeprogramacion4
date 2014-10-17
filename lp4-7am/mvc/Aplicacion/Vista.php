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
        $ruta = ROOT . 'vistas' . DS . $this->_controlador . DS . $vista . '.php';

        if (is_readable($ruta)) {
            include_once $ruta;
        } else {
            throw new Exception('Error de vista no encontrada');
        }
    }
} 