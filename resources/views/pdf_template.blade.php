{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PDF de Datos Personales</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Datos de la Persona</h1>
    <p>Nombre: {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}</p>
    <!-- Agrega aquí otros datos de la tabla `datospersonas` -->

    @foreach ($tablas as $tabla)
        <h2>{{ $tabla['titulo'] }}</h2>
        <table>
            <thead>
                <tr>
                    @foreach ($tabla['columnas'] as $columna)
                        <th>{{ $columna }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($tabla['filas'] as $fila)
                    <tr>
                        @foreach ($fila as $valor)
                            <td>{{ $valor }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
</body>
</html> --}}

{{--
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PDF</title>
    <style>
        @page {
            size: legal;
            margin: 2.5cm 2cm 2cm 2.5cm;
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 10px;
        }
        h1 {
            font-size: 16px;
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 14px;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Datos de la Persona</h1>
    <p><strong>Nombre:</strong> {{ $datospersona->nombre }}</p>
    <p><strong>Apellido Paterno:</strong> {{ $datospersona->apellidoPaterno }}</p>
    <p><strong>Apellido Materno:</strong> {{ $datospersona->apellidoMaterno }}</p>

    @foreach ($tablas as $tabla)
        <h2>{{ $tabla['titulo'] }}</h2>
        <table>
            <thead>
                <tr>
                    @foreach ($tabla['columnas'] as $columna)
                        <th>{{ $columna }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($tabla['filas'] as $fila)
                    <tr>
                        @foreach ($fila as $dato)
                            <td>{{ $dato }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
</body>
</html> --}}







@extends('adminlte::page')

@section('title', 'PDF')

@section('content_header')
    <h1>Datos de la Persona</h1>
@endsection

@section('content')
    <p><strong>Nombre:</strong> {{ $datospersona->nombre }}</p>
    <p><strong>Apellido Paterno:</strong> {{ $datospersona->apellidoPaterno }}</p>
    <p><strong>Apellido Materno:</strong> {{ $datospersona->apellidoMaterno }}</p>

    @foreach ($tablas as $tabla)
        <h2>{{ $tabla['titulo'] }}</h2>
        <table>
            <thead>
                <tr>
                    @foreach ($tabla['columnas'] as $columna)
                        <th>{{ $columna }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($tabla['filas'] as $fila)
                    <tr>
                        @foreach ($fila as $dato)
                            <td>{{ $dato }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
@endsection

@section('css')
    <style>
        @page {
            size: legal;
            margin: 2.5cm 2cm 2cm 2.5cm;
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 10px;
        }
        h1 {
            font-size: 16px;
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 14px;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
@endsection
