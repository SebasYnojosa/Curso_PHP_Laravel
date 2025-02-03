<?php
declare (strict_types= 1);

$a = null;
$db = $a ?? "default"; // El operador de fusión de null (??) devuelve el primer operando si no es null, de lo contrario devuelve el segundo operando

var_dump(
    null == null,
    null == false,
    null == 0,
    null == '',
    null == [],
    $a, // Cuando se crea una variable sin asignarle un valor, su valor por defecto es null
    isset($a), // La función isset() devuelve false si la variable no está definida o su valor es null, incluso si se le asigna el valor null de forma explícita
    is_null($a),
    $db,
    empty([]), // La función empty() devuelve true si la variable no está definida, su valor es null, es un string vacío, un array vacío, un entero 0, un float 0.0, un string "0" o un booleano false
    empty(null),
    empty(0)
);

function greet (?string $name)
{
    echo "Hola, " . ($name ?? "extraño") . "\n";
}

greet(null);

var_dump(
    array_filter([1, null, '', 0, false]) // La función array_filter() elimina los elementos de un array que son evaluados como false
);