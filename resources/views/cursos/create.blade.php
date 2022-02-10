@extends('layouts.template')

@section('title', 'Main')

@section('content')
    <h1>Create</h1>

    <form action="{{ route('cursos.store')}}" method="post">
        @csrf
        <label>
            Nombre<br>
            <input type="text" name="name" id="">
        </label><br>
        
        <label>
            Descripcion<br>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </label><br> 
        
        <label>
            Categoria<br>
            <input type="text" name="category" id="">
        </label><br>

        <input type="submit" value="Enviar Formulario">
    </form>
@endsection