<?php

$nombre = "José";
echo 'Hola, $nombre\n'; // Hola, $nombre\n, las comillas simples no interpretan variables
echo "Hola, $nombre\n"; // Hola, José, las comillas dobles interpretan variables

// Heredoc es una forma de definir cadenas de texto multilinea, el contenido de la cadena se interpreta como si estuviera entre comillas dobles
// Cuidado con la linea de EOD, no puede tener espacios ni tabulaciones
$heredoc = <<<EOD
Cadenas de texto
divididas en varias líneas
con variables $nombre
EOD;

// Nowdoc es similar a Heredoc, pero el contenido de la cadena se interpreta como si estuviera entre comillas simples
$nowdoc = <<<'EOD'
Cadenas de texto
divididas en varias líneas
sin variables $nombre
EOD;

echo $heredoc;
echo $nowdoc;