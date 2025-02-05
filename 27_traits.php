<?php

// Traits o rasgos, son una forma de reutilizar código en clases que no pueden heredar de otras clases, se pueden usar en varias clases a la vez

trait Loggable
{
    public function log(string $message): void
    {
        echo "Logging: $message\n";
    }
}

class User 
{
    use Loggable; // Se usa la palabra reservada use para incluir un trait en una clase

    public function __construct(public string $name){}

    public function save(): void
    {
        $this->log("Usuario {$this->name} guardado");
    }
}

$user = new User("Sebastian");
$user->save();
$user->log("Mensaje de prueba");