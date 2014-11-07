<?php

class Cursos extends ConsultasMYSQL
{
    private $table = "users";

    public function select()
    {
        $campos = array("id", "usuario", "apellidos");
        $datos = $this->all($this->table, $campos);
        return $datos;
    }

    public function showing($id)
    {
        //$campos = array("id", "usuario", "apellidos");
        $datos = $this->show($this->table, $id);
        return $datos;
    }

    public function update($campos, $id)
    {
        $OK = $this->updated($this->table, $id, $campos);
        if ($OK) {
            return json_encode(array(
                "Result" => "OK"
            ));
        } else {
            return json_encode(array(
                "Result" => "ERROR"
            ));
        }
    }

    public function add($campos)
    {
        $OK = $this->created($this->table,$campos);
        if ($OK) {
            return json_encode(array(
                "Result" => "OK"
            ));
        } else {
            return json_encode(array(
                "Result" => "ERROR"
            ));
        }
    }

    public function destroy($id)
    {
        $OK = $this->destroyed($this->table,$id);
        if ($OK) {
            return json_encode(array(
                "Result" => "OK"
            ));
        } else {
            return json_encode(array(
                "Result" => "ERROR"
            ));
        }
    }
} 