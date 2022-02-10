@extends('layouts.template')

@section('title', 'Main')

@section('content')
    <h1>Edit</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('cursos.update', $curso)}}" method="post">
        @csrf
        @method("put")
        <label>
            Nombre<br>
            <input type="text" name="name" id="" value="{{ old('name', $curso->name) }}">
        </label><br>
        
        <label>
            Descripcion<br>
            <textarea name="description" id="" cols="30" rows="10">{{ old('description',$curso->description) }}</textarea>
        </label><br> 
        
        <label>
            Categoria<br>
            <input type="text" name="category" id="" value="{{ old('category', $curso->category) }}">
        </label><br>

        <input type="submit" value="Actualizar Formulario" >
    </form>

    <a href="{{ route('cursos.index') }}">Regresar</a>
@endsection