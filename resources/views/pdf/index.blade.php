@extends('adminlte::page')
@section('content')
<div class="container">
    <p>Seleccionar Docente</p>
</div>
    <form action="{{ route('pdf.generate') }}" method="GET">
        <label for="datospersona">Seleccionar datospersona:</label>
        <select name="id" id="datospersona">
            @foreach($datospersonas as $datospersona)
                <option value="{{ $datospersona->id }}">{{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}</option>
            @endforeach
        </select>
        <button type="submit">Generar PDF</button>
    </form>
@endsection
