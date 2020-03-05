<?php

class Connection
{
    // Contenedor Instancia de la clase
    private static $instance = null;
    private $con = null;
    // Constructor privado, previene la creación de objetos vía new
    private function __construct()
    {
        $this->con = new mysqli("HOST", "USER", "PASSWORD", "DATABASE");
    }

    // Clone no permitido
    private function __clone()
    {
    }

    // Método singleton
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function query($sql)
    {
        return $this->con($query);
    }
}