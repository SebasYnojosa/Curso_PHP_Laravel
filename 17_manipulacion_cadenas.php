<?php

$string = "Hola, mundo!";
echo $string[0]; // H
echo $string[-1]; // Final de la cadena

echo substr($string, 0, 4); // Hola
echo substr($string, 5); // mundo!

echo strtoupper($string);
echo strtolower($string);

$greeting = "Hola, " . "Mundo!";
$greeting .= " ¿Cómo estás?"; // Hola, Mundo! ¿Cómo estás?, el . es el operador de concatenación de cadenas

echo $greeting;