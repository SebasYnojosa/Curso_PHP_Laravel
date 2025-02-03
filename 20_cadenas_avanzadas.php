<?php

$multibyte_string = "みさえさんはきれいな人です。"; // En este caso la cadena tiene caracteres multibyte, es decir, caracteres que ocupan más de un byte en memoria
var_dump(mb_strlen($multibyte_string)); // Por esto es necesario utilizar la función mb_strlen para obtener la longitud de la cadena, una variante de strlen que soporta caracteres multibyte

$url = "https://www.example.com/path?key=value&special=#$^&*"; // En este caso la cadena tiene caracteres especiales que deben ser codificados para ser utilizados en una URL
var_dump($url);
var_dump(urlencode($url)); // Por esto es necesario utilizar la función urlencode para codificar la cadena y que pueda ser utilizada en una URL

$html = '<h1>¡Hola, Mundo!</h1>'; // En este caso la cadena tiene caracteres especiales que deben ser codificados para ser utilizados en un documento HTML

var_dump(htmlentities($html)); // Por esto es necesario utilizar la función htmlentities para codificar la cadena y que pueda ser utilizada en un documento HTML

var_dump(base64_decode(base64_encode("Hola Mundo!"))); // La función base64_encode codifica una cadena en base64, esto sirve para codificar datos binarios en una cadena de texto, como por ejemplo una imagen