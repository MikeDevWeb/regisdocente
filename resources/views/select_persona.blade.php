{{-- @extends('adminlte::page')

@section('content')

<div class="container">
    <h1>Seleccionar Persona</h1>
    <form action="{{ route('generar_pdf') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="persona_id">ID de Persona</label>
            <input type="text" id="persona_id" name="persona_id" required>
        </div>
        <button type="submit">Generar PDF</button>
    </form>
</div>

@endsection
@section('css')
body {
    font-family: Arial, sans-serif;
    font-size: 14px;
}
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}
.form-group {
    margin-bottom: 15px;
}
label {
    display: block;
    margin-bottom: 5px;
}
input[type="text"] {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
}
button {
    padding: 10px 15px;
    background-color: #28a745;
    color: #fff;
    border: none;
    cursor: pointer;
}
button:hover {
    background-color: #218838;
}
@endsection --}}

{{--
@extends('adminlte::page')

@section('title', 'Seleccionar Persona')

@section('content_header')
    <h1>Seleccionar Persona</h1>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('generar_pdf') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="persona_id">ID de Persona</label>
                <input type="text" id="persona_id" name="persona_id" required>
            </div>
            <button type="submit">Generar PDF</button>
        </form>
    </div>
@endsection --}}


@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Seleccionar Persona</h1>
    <form action="{{ route('generar_html') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="persona_id">ID de la Persona</label>
            <input type="number" class="form-control" id="persona_id" name="persona_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Generar HTML</button>
    </form>
</div>
@endsection


@section('css')
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 15px;
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
@endsection
