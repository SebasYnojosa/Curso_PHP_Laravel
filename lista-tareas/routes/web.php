<?php

use App\Models\Tasks;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

// Las rutas son las URL que el usuario puede visitar en la aplicación.

Route::get('/', function() {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', [  // La data se pasara a la vista index en forma de arreglo asociativo
        'tasks' => Tasks::latest()->get()
    ]);
})->name('tasks.index');

Route::get('tasks/{id}', function ($id) {
    return view('show', [
        'task' => Tasks::findOrFail($id)
    ]);
})->name('tasks.show');

// Route::get('/hello', function () {
//     return 'Hola Mundo!';
// })->name('hello');

// Route::get('/greet/{name}', function ($name) { // {name} es un parámetro
//     return 'Hola, ' . $name . '!';
// });

// Route::get('/hallo', function() {
//     // return redirect('/hello');
//     return redirect()->route('hello');
// });

// GET: es el método HTTP para obtener datos del servidor.
// POST: es el método HTTP para enviar datos al servidor.
// PUT: es el método HTTP para actualizar datos en el servidor.
// DELETE: es el método HTTP para eliminar datos del servidor.

Route::fallback(function () {   // Si no se encuentra ninguna ruta, se ejecuta esta función
    return '¿A dónde vas, mi pana?';
});
