<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 17/10/14
 * Time: 05:23 PM
 */

class usuariosControlador extends Controlador{
    private $_users;
    public function __construct()
    {
        $this->_users = $this->loadModel('Cursos');
        parent::__construct();
    }

    public function index()
    {
        $datos = $this->_users->showing(1);

        $this->_vista->usuarios = $datos;
        $this->_vista->renderizar('index');
    }

    public function show($id)
    {
        $datos = $this->_users->show($id);

    }

    public function editar($id)
    {
        //$datos = $_POST;
        $datos = [
            "usuario" => "juan",
            "apellidos"=> "juan"
        ];

        $bol = $this->_users->update($datos,$id);
        echo $bol;
        exit;
    }
} 