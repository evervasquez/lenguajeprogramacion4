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
        $datos = $this->_users->select();
        exit;
        $this->_vista->renderizar('index');
    }

    public function show($id)
    {
        $datos = $this->_users->show($id);
        exit;
    }
} 