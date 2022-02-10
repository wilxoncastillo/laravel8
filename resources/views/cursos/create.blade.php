@extends('layouts.template')

@section('title', 'Main')

@section('content')
    <h1>Create</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('cursos.store')}}" method="post">
        @csrf
        <label>
            Nombre<br>
            <input type="text" name="name" id="" value="{{ old('name') }}">
        </label>
        @error('name')
            <br>
            <small>* {{ $message }}</small>
            <br>
        @enderror
        
        <br>
        
        <label>
            Descripcion<br>
            <textarea name="description" id="" cols="30" rows="10">{{ old('description') }}</textarea>
        </label>
        @error('description')
            <br>
            <small>* {{ $message }}</small>
            <br>
        @enderror
        <br> 
        
        <label>
            Categoria<br>
            <input type="text" name="category" id="" value="{{ old('category') }}">
        </label>
        @error('category')
            <br>
            <small>* {{ $message }}</small>
            <br>
        @enderror
        <br>

        <input type="submit" value="Enviar Formulario">
    </form>
@endsection