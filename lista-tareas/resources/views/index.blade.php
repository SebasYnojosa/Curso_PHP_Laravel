<div>Hola soy una plantilla de Blade!</div>

@isset($name)
    <div>Tu nombre es: {{ $name }}</div>
@endisset
{{-- Solo se mostrará si la variable $name está definida --}}
