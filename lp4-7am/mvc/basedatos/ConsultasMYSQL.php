<?php

/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 31/10/14
 * Time: 09:32 AM
 */
class ConsultasMYSQL extends conexion
{
    protected function all($tabla, $campos = null)
    {
        $db = new conexion();
        $cadena = null;
        /*foreach ($campos as $campo) {
            $cadena .= $campo . ',';
        }*/
        $consultaSQL = "SELECT * FROM $tabla ";
        $sql = $db->prepare($consultaSQL);
        $result = $sql->execute();
        $db->cerrar();
        if ($result) {
            return $sql->fetchAll();
        } else {
        }
    }

    protected function show($tabla, $id)
    {
        $consultaSQL = "SELECT * FROM $tabla ";
        $sql = $this->db->prepare($consultaSQL);
        $result = $sql->execute();
        $this->db->cerrar();
        var_dump($result);
        exit;
        if ($result) {
            return $sql->fetchAll();
        } else {
        }
    }

} 