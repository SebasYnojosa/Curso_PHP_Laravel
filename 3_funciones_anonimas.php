<?php

// Las funciones anónimas son funciones sin nombre que se pueden asignar a una variable también conocidas como closures

$greet = function ($name) 
{ // Se asigna una función anónima a la variable $greet
    return "Hola, $name";
};

echo $greet("Mundo") . "\n";

$numbers = [1, 2, 3, 4];
$squared = array_map(function ($num) 
{ // La función array_map aplica una función a cada elemento de un array
    return $num * $num;
}, $numbers);

var_dump($numbers,$squared);

$message = "Bye";
$greet = function ($name) use (&$message) 
{ // Se pasa por referencia la variable $message para que pueda ser modificada dentro de la función
    $message = $message ."!";
    return "$message, $name\n"; // Las funciones anónimas pueden acceder a variables definidas fuera de su alcance mediante el uso de la palabra clave use
};

echo $greet("José");
echo $message;
