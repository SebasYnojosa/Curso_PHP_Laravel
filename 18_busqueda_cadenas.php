<?php

$haystack = "La rapida busqueda de cadenas";
$needle = strpos($haystack, "rapida");

var_dump($needle); // int(3)

var_dump(str_replace("rapida", "lenta", $haystack)); // "La lenta busqueda de cadenas"


preg_match_all('/\w{8}/', $haystack, $matches);
// El patron \w{8} busca palabras de 8 caracteres

var_dump($matches);