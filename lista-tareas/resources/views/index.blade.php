<h1>Lista de tareas</h1>

<div>
    {{-- @if(count($tasks)) --}}
    @forelse($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}"> {{ $task->name }} </a>
        </div>
    @empty
        <div>Aquí no hay tareas!</div>
    @endforelse
    {{-- @endif --}}
</div>
