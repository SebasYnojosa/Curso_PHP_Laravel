<?php

$numbers = [1, 2, 3, 4, 5];
$multiplier = 3;

// $squared = array_map(function ($n) use ($multiplier) {
//     return $n * $multiplier;
// }, $numbers);

// Ahora con funciones flecha

$squared = array_map(fn($n) => $n * $multiplier, $numbers); // Las funciones flecha pueden heredar variables del ámbito en el que se definen como en este caso $multiplier

var_dump($numbers, $squared);