@extends('layouts.app')

@section('title', 'Crear tarea')

@section('content')
    {{ $errors }}
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf {{-- Directiva de Blade para protección contra CSRF --}}
        <div>
            <label for="title">
                Título
            </label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">
                Descripción
            </label>
            <textarea name="description" id="description" rows="5"></textarea>
        </div>
        <div>
            <label for="long_description">
                Descripción Larga
            </label>
            <textarea name="long_description" id="long_description" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Agregar Tarea</button>
        </div>
    </form>
@endsection
