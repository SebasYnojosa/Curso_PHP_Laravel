<?php

$name = "David";
$age = 30;

printf("%s tiene %d años de edad\n", $name, $age);

$csv = "apple,banana,cherry,date";
$fruits = explode(",", $csv);

var_dump($fruits, implode(",", $fruits));

$padded = str_pad("Hola", 12, "-", STR_PAD_LEFT); // str_pad añade caracteres a la dirección especificada (izquierda, derecha, ambos)
$padded2 = str_pad("Pedro", 12, "-", STR_PAD_LEFT);
echo "$padded\n";
echo "$padded2\n";

var_dump(trim("                  Hola, Mundo!                    "));