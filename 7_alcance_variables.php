<?php

$presidente = "Donald Trump";

function revelarPresidente(): void
{
    global $presidente; // La palabra clave global permite acceder a una variable definida fuera de la función
    $presidente = "Joe Biden"; // Al cambiar el valor de la variable dentro de la función, también se cambia el valor de la variable global
    $message = "es el presidente de los Estados Unidos\n";	
    echo "$presidente $message";
}

revelarPresidente();
echo $presidente . "\n";
 
function contarVisitas(): void 
{
    static $contador = 0; // La palabra clave static permite que una variable mantenga su valor entre llamadas a la función sin que se destruya
    $contador++;
    echo "El visitante #$contador ha entrado a la página\n";
}

contarVisitas();
contarVisitas();
contarVisitas();
contarVisitas();
contarVisitas();
contarVisitas();
contarVisitas();
contarVisitas();
contarVisitas();

// function getDatabase() 
// {
//     static $dbConnection; 

//     if ($dbConnection === null) 
//     {
//         $dbConnection = connect();
//     }

//     return $dbConnection;
// } 

// Se sigue el patrón Singleton para mantener una única conexión a la base de datos en toda la aplicación