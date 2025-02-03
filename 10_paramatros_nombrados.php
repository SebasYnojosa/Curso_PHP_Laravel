<?php

function greet(string $name, string $greeting = "Hola", bool $uppercase = false): string 
{
    $message = "$greeting, $name";
    return $uppercase ? strtoupper($message) : $message;
}

echo greet("Hola", "Antonio", true) . "\n";

echo greet(name: "Antonio", uppercase: true) . "\n";