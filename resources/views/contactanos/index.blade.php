@extends('layouts.template')

@section('title', 'Main')

@section('content')
    <h1>Dejanos un mensaje</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif

    <form action="{{ route('contactanos.store') }}" method="post">
        @csrf
        <label>
            Nombre:<br>
            <input type="text" name="name" id="" value="{{ old('name') }}">
        </label><br>

        @error('name')
            <p><strong>{{ $message }}</strong></p>
        @enderror

        <label>
            Correo:<br>
            <input type="text" name="correo" id="" value="{{ old('correo') }}">
        </label><br>

        <label>
            Mensaje:<br>
            <textarea name="mensaje" rows="4">
                {{ old('mensaje') }}
            </textarea>
        </label><br>

        <button type="submit">Enviar</button>
    </form>

    @if(session('info'))
        <script>
            alert({{ session('info') }});
        </script>
    @endif
   
@endsection