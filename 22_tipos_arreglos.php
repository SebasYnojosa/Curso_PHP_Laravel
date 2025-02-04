<?php

$simpleArray = [1, 2, 3, 4, 5];
$assocArray = [
    'name' => 'David',
    'age' => 30,
    'city' => 'Caracas'
];

// echo $simpleArray[0];
// echo $assocArray['name'];

$simpleArray[] = 6; // Agregar un elemento al final del arreglo
$assocArray['country'] = 'Venezuela'; // Agregar un elemento al final del arreglo con un índice específico

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// echo $matrix[1][1]; // 5

$fruits = ['apple', 'banana', 'cherry'];
// var_dump(count($fruits)); // 3

// sort($fruits);      // Ordena de forma ascendente
// var_dump($fruits);

// rsort($fruits);     // Ordena de forma inversa
// var_dump($fruits);

// asort($assocArray); // Ordena por valor
// var_dump($assocArray);

// ksort($assocArray); // Ordena por clave
// var_dump($assocArray);

// $numbers = range(1, 5); // [1, 2, 3, 4, 5]
// var_dump($numbers);

// $squared = array_map(fn($n) => $n ** 2, $numbers);
// var_dump($squared);

// $filtered = array_filter($numbers, fn($n) => $n % 2 === 0);
// var_dump($filtered);

// $sum = array_reduce(
//     $numbers, 
//     fn($carry,  $n) => $carry + $n, // Función que se ejecuta en cada iteración, $carry es el valor acumulado y $n es el valor actual
//     0
// );
// var_dump($sum);

// $moreNum = [0, ...$numbers, 6]; // El operador ... se usa para desempaquetar un arreglo y agregarlo a otro
// var_dump($moreNum);

// [$first, $second, $third] = $fruits; // Desempaquetar un arreglo en variables
// var_dump($first, $second, $third);

$set1 = [1,2,3,4,5];
$set2 = [3,4,5,6,7];

var_dump(
    array_intersect($set1, $set2), // array_intersect, devuelve los elementos que están en ambos arreglos
    array_intersect($set2, $set1), // El orden de los arreglos no afecta el resultado 
    array_diff($set1, $set2),   // array_diff devuelve los elementos que están en el primer arreglo pero no en el segundo
    array_diff($set2, $set1)    // en este caso si importa el orden de los arreglos
);

$keys = array_map(fn ($key) => ucfirst($key), array_keys($assocArray)); // Devuelve un arreglo con las claves del arreglo asociativo
$values = array_values($assocArray); // Devuelve un arreglo con los valores del arreglo asociativo

var_dump($keys, $values);

var_dump(
    array_key_exists('name', $assocArray), // array_key_exists, devuelve true si la clave existe en el arreglo
    in_array('David', $assocArray) // in_array, devuelve true si el valor existe en el arreglo
);

$fruitString = implode(',', $fruits); // Convierte un arreglo en un string

var_dump($fruitString);

$fruitArray = explode(',', $fruitString); // Convierte un string en un arreglo

var_dump($fruitArray);

// var_dump(
//     array_merge($set1, $set2), // array_merge, combina dos arreglos
//     $assocArray,
//     array_merge($assocArray, ['country' => 'UK']), // Se pueden agregar elementos al arreglo asociativo, si la llave ya existe se sobreescribe
//     $set1 + $set2, // El operador + también combina arreglos, pero si hay llaves duplicadas se toma el valor del primer arreglo
//     $assocArray + ['country' => 'UK'], // En el caso de los arreglos asociativos, se toma el valor del primer arreglo
//     [...$set1, ...$set2],
//     [...$assocArray, ...['country' => 'UK']]
// );

var_dump(
    array_search('banana', $fruits) // array_search, devuelve el índice del valor en el arreglo
);