<?php
declare (strict_types= 1);
function input(int|float|string $input) // Se puede indicar que un parámetro puede ser de varios tipos con el operador |
{
    return match(true)
    {
        is_int($input) => "Entero: " . ($input*2),
        is_float($input) => "Flotante: " . round($input, 2),
        is_string($input) => "Cadena: " . strtoupper($input),
        default => "El valor es de un tipo desconocido"
    };
}

$inputs = [1, 2.5, "hola", 3.1416, "mundo", 5];

foreach ($inputs as $input)
{
    echo input($input) . "\n";
}

