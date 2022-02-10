@extends('layouts.template')

@section('title', 'Main')

@section('content')
    <h1>Edit</h1>

    <form action="{{ route('cursos.update', $curso)}}" method="post">
        @csrf
        @method("put")
        <label>
            Nombre<br>
            <input type="text" name="name" id="" value="{{ $curso->name }}">
        </label><br>
        
        <label>
            Descripcion<br>
            <textarea name="description" id="" cols="30" rows="10">{{ $curso->description }}</textarea>
        </label><br> 
        
        <label>
            Categoria<br>
            <input type="text" name="category" id="" value="{{ $curso->category }}">
        </label><br>

        <input type="submit" value="Actualizar Formulario" >
    </form>

    <a href="{{ route('cursos.index') }}">Regresar</a>
@endsection