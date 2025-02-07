<?php

use Illuminate\Support\Facades\Route;

// Clase de tareas

class Task
{
    public function __construct(
        public int $id,
        public string $name,
        public string $description,
        public ?string $long_description,
        public bool $completed,
        public string $created_at,
        public string $updated_at,
    ) {}
}

// Tareas de prueba

$tasks = [
    new Task(
        id: 1,
        name: 'Comprar leche',
        description: 'Ir al supermercado y comprar leche',
        long_description: 'Ir al supermercado y comprar leche, de preferencia deslactosada',
        completed: false,
        created_at: '2021-10-01',
        updated_at: '2021-10-01',
    ),
    new Task(
        id: 2,
        name: 'Pasear al perro',
        description: 'Sacar al perro a pasear por el parque',
        long_description: 'Sacar al perro a pasear por el parque, llevar bolsas para recoger sus desechos',
        completed: true,
        created_at: '2021-10-02',
        updated_at: '2021-10-02',
    ),
    new Task(
        id: 3,
        name: 'Estudiar para el examen',
        description: 'Repasar los temas vistos en clase para el examen de mañana',
        long_description: 'Repasar los temas vistos en clase para el examen de mañana, hacer resúmenes y ejercicios',
        completed: false,
        created_at: '2021-10-03',
        updated_at: '2021-10-03',
    ),
];

// Las rutas son las URL que el usuario puede visitar en la aplicación.

Route::get('/', function () use ($tasks) {
    return view('index', [  // La data se pasara a la vista index en forma de arreglo asociativo
        'tasks' => $tasks
    ]);
})->name('tasks.index');

Route::get('/{id}', function ($id) {
    return 'Una tarea';
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
