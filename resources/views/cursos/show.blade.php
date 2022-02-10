@extends('layouts.template')

@section('title', 'Main')

@section('content')
    <h1>show</h1>
    <pre>
        <code>
            {{ $curso }}
        </code>
    </pre><br>

    <a href="{{ route('cursos.index') }}">Regresar</a><br>
    <a href="{{ route('cursos.edit', $curso) }}">Editar</a>

    <form action="{{ route('cursos.destroy', $curso) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Borrar</button>
    </form>
@endsection