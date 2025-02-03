<?php 

// Las funciones de orden superior son funciones que reciben como parámetro otra función o devuelven una función

// Ejemplo de esto pueden ser las funciones array_map, array_filter, array_reduce, etc.

$numbers = [1, 2, 3, 4, 5];

// array_map aplica una función a cada elemento de un array

$squared = array_map(function ($n) {
    return $n * $n;
}, $numbers);

var_dump($squared);

$users = [
    ['id' => 1, 'name' => 'John', 'role' => 'admin'],
    ['id' => 2, 'name' => 'Jane', 'role' => 'user'],
    ['id' => 3, 'name' => 'Sue', 'role' => 'user'],
    ['id' => 4, 'name' => 'Dave', 'role' => 'user'],
    ['id' => 5, 'name' => 'Beth', 'role' => 'user']
];

// Se ve en este caso que se crea una función que retorna otra función
function createFilter($key, $value) 
{
    return fn($item) => $item[$key] === $value;
}

// Se crea una función que filtra los usuarios que tengan el rol de admin
$isAdmin = createFilter('role', 'admin');

// Aqui hay una función de orden superior que recibe como parámetro otra función
$admins = array_filter($users, $isAdmin);

var_dump($admins);

$isJane = createFilter('name', 'Jane');
var_dump(array_filter($users, $isJane));