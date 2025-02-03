<?php

// Funciones puras, son las que su resultado depende únicamente de sus argumentos y no modifican variables fuera de su ámbito
function add(int $a, int $b): int
{
    return $a + $b;
}

var_dump(add(5, 3));
var_dump(add(5, 3));
var_dump(add(5, 3));
var_dump(add(5, 3));


// Una función no pura son las que no siempre dan los mismos resultados para los mismos argumentos o modifican variables fuera de su ámbito

$total = 0;

function addToTotal ($value) 
{
    global $total;
    $total += $value;
    return $total;
}

var_dump(addToTotal(5));
var_dump(addToTotal(5));
var_dump(addToTotal(5));
var_dump(addToTotal(5));
var_dump(addToTotal(5));
