<?php

function doubleValue(int &$number): int {
    $number *= 2;
    return $number;
}

// $number = 5;
// doubleValue($number);
// var_dump($number);

function swap(int &$number1, int &$number2): void 
{ // Al usar & se pasa por referencia lo que permite modificar las variables originales fuera de la función
    $temp = $number1;
    $number1 = $number2;
    $number2 = $temp;
}

$number1 = 5;
$number2 = 4;
var_dump($number1, $number2);
swap($number1, $number2);
var_dump($number1, $number2);
