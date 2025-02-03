<?php

$int = 69;
$float = 3.1416;
$stringToInt = (int)"420";
$floatToInt = (int)3.99;

var_dump($int, $float, $stringToInt, $floatToInt);

var_dump(6%2 === 0);

// Operaciones mateáticas

var_dump(
    round(3.7),
    round(3.4),
    floor(3.7),
    ceil(3.1),
    min(2, 7, 1, 0),
    max(2, 7, 1, 0),
    rand(1, 10),
    abs(-10)
);

$num = 1234.56;
echo "Formateado: " . number_format($num, 2, ".", ",");