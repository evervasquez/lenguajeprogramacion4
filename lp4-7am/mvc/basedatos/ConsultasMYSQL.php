<?php


class ConsultasMYSQL extends conexion
{

    protected function all($tabla, $campos = null)
    {
        $db = new conexion();
        if ($campos == null) {
            $campos = "*";
        } else {
            $campos = implode(',', $campos);
        }
        $consultaSQL = "SELECT $campos FROM $tabla ";
        $stmt = $db->prepare($consultaSQL);
        $result = $stmt->execute();
        $db->cerrar();
        if ($result) {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
        } else {
        }
    }

    protected function show($tabla, $id, $campos = null)
    {
        $db = new conexion();
        if ($campos == null) {
            $campos = "*";
        } else {
            $campos = implode(',', $campos);
        }
        $consultaSQL = "SELECT $campos FROM $tabla WHERE id =:id";
        $stmt = $db->prepare($consultaSQL);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $result = $stmt->execute();
        $db->cerrar();
        if ($result) {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
        } else {
        }
    }

    protected function updated($tabla, $id, $campos)
    {
        $cadena = null;
        $db = new conexion();

        foreach ($campos as $key => $campo) {
            $cadena .= $key . "= :$key,";
        }

        $cadena = trim($cadena, ',');
        $sql = "UPDATE $tabla SET $cadena WHERE id= :id";
        $stmt = $db->prepare($sql);

        //verificamos que tipo de variable es
        foreach ($campos as $key => $campo) {
            if (is_int($campo)) {
                $stmt->bindParam(":$key", $campo, PDO::PARAM_INT);
            } elseif (is_string($campo)) {
                $stmt->bindParam(":$key", $campo, PDO::PARAM_STR);
            } elseif (is_double($campo)) {
                $stmt->bindValue(":$key", $campo, PDO::PARAM_INT);
            } elseif (is_null($campo)) {
                $stmt->bindValue(":$key", $campo, PDO::PARAM_NULL);
            }
        }
        //enviamos el id
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
} 