@extends('layouts.template')

@section('title', 'Main')

@section('content')
    <h1>Cursos</h1>

    <a href="{{ route('cursos.create') }}">Crear Curso</a>
    <ul>
        @foreach($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso) }}">{{ $curso->name }}</a>
            </li>
        @endforeach
    </ul>
    {{ $cursos->links() }}
@endsection