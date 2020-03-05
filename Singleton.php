<?php

class Singleton
{
    // Contenedor instancia de la clase
    private static $instance = null;

    // Constructor privado, previene la creación de objetos vía new
    private function __construct()
    {
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
}