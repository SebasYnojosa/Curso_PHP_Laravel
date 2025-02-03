<?php

// Las funciones generadoras son funciones que permiten devolver un valor y pausar la ejecución de la función para luego continuarla en otro momento.

function countDown(int $start): Generator
{
    for ($i = $start; $i > 0; $i--) 
    {
        echo "Generando ... \n";
        yield random_int(0, 100);   // yield es una palabra reservada que se utiliza para devolver un valor de una función generadora
    }
}

foreach (countDown(5) as $number)
{
    echo "Mostrando numero: ";
    echo $number . "\n";
}