<?php

class Cursos extends ConsultasMYSQL
{
    private $table = "users";

    public function select()
    {
        $campos = array("id","descripcion");
        $datos = $this->all($this->table, $campos);
        echo '<pre>';
        var_dump($datos);
    }

    public function show($id)
    {
        $datos = $this->show($this->table,$id);
        echo '<pre>';
        var_dump($datos);
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