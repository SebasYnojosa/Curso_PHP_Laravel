@extends('layouts.app')

@section('title', 'Lista de tareas')

@section('content')
    <div>
        {{-- @if(count($tasks)) --}}
        @forelse($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['id' => $task->id]) }}"> {{ $task->title }} </a>
            </div>
        @empty
            <div>Aquí no hay tareas!</div>
        @endforelse
        {{-- @endif --}}
    </div>

@endsection
