<?php

$large = range(1, 1_000_000); // PHP permite usar _ para separar los números y hacerlos más legibles

$start_time = microtime(true);
$start_mem = memory_get_usage();

$output = [];

// foreach ($large as &$value) 
// {
//     $output[] = $value*2;
// }

foreach ($large as &$value) 
{  
    $value *= 2;
}

$end_time = microtime(true);
$end_mem = memory_get_usage();

echo "Tiempo: " . ($end_time - $start_time) . " segundos\n";
echo "Memoria: " . round(($end_mem - $start_mem)/(1024*1024)) . " MBs\n";

// Al hacer la prueba se llega la conclusión de que es más eficiente haccer una copia del valor que se está iterando en lugar de pasar por referencia