<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Bienvenido';
});

Route::get('/hello', function () {
    return 'Hola Mundo!';
})->name('hello');

Route::get('/greet/{name}', function ($name) { // {name} es un parámetro
    return 'Hola, ' . $name . '!';
});

Route::get('/hallo', function() {
    // return redirect('/hello');
    return redirect()->route('hello');
});

// GET: es el método HTTP para obtener datos del servidor.
// POST: es el método HTTP para enviar datos al servidor.
// PUT: es el método HTTP para actualizar datos en el servidor.
// DELETE: es el método HTTP para eliminar datos del servidor.

Route::fallback(function () {   // Si no se encuentra ninguna ruta, se ejecuta esta función
    return '¿A dónde vas, mi pana?';
});
