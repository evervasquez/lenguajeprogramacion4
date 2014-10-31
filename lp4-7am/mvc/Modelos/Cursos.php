<?php

class Cursos extends conexion implements Consultas
{
    private $db;

    public function select()
    {
        $this->db = new conexion();
        $sql = $this->db->prepare("SELECT * FROM users");
        $datos = $sql->execute();

        $row = $sql->fetch();
        echo '<pre>';
        var_dump($row);
    }

    public function update($id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    public function add($datos)
    {
        // TODO: Implement add() method.
    }

} 