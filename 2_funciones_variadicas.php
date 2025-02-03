<?php 
declare (strict_types= 1);

function sum(int ... $numbers): int 
{ // El operador ... indica que se pueden pasar un número variable de argumentos
    $sum = 0;
    foreach( $numbers as $number ) {
        $sum += $number;
    }
    return $sum;
}

var_dump( sum(1, 2, 3, 4, 5, 6, 7, 8) );
// var_dump( sum(1, 2, 3, 4, 5, 6, 7, "8") ); 
// Error debido a que se espera un int y se pasa un string, todos los argumentos deben ser del mismo tipo

$numbers = [1, 2, 3];

var_dump( sum(... $numbers) ); // El operador ... indica que se pasará un array de argumentos

function introduceTeam(string $teamName, string ... $members): void 
{ // Se indica el tipo de retorno void para indicar que no se espera un valor de retorno
    echo "Nombre del equipo: $teamName\n";
    var_dump($members);
    echo "Members: " . implode(", ", $members) ."\n";
}

// introduceTeam("Equipo Maravilla", "PHP", "JavaScript", "Java", "C++");

$equipoTortilla = ["Express", "Angular", "Node", "MongoDB", "React"];

introduceTeam("Equipo Tortilla", ... $equipoTortilla);