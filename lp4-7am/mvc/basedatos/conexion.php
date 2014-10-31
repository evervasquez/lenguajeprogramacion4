<?php

class conexion extends PDO
{


    protected static $instancia = null;
    public static $_servidor = null;
    private $driver = "mysql";
    private $database = "mvc";
    private $host =  "localhost";
    private $puerto = "3306";
    private $usuario = "root";
    private $password = "";

    public function __construct()
    {
        if (!is_null(self::$instancia)) {
            return self::$instancia;
        }
        $dsn = $this->driver . ':dbname=' . $this->database . '; host=' . $this->host . '; port=' . $this->puerto;
        $password = trim($this->password);
        try {
            self::$instancia = parent::__construct($dsn, $this->usuario, $password);
            return self::$instancia;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
