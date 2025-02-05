<?php

class MathUtils 
{
    public static float $pi = 3.14159265359; // Static se usa para definir atributos y métodos estáticos, estos se pueden acceder sin necesidad de instanciar la clase

    public static function square($number): float
    {
        return $number * $number;
    }
}

var_dump(
    MathUtils::$pi,
    MathUtils::square(4)
);

// Es bueno usar clases estáticas para recursos que no cambian y que se pueden reutilizar en todo el código

class Connection
{
    private static $instance = null;
    private function __construct() {}

    public static function singleton() 
    {
        if (null === static::$instance) {   // Se usa static en lugar de self para que las clases hijas puedan sobreescribir el método  
            static::$instance = new static();
        }
        return static::$instance;
    }
}

$connection = Connection::singleton();