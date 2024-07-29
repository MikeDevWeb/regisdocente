@extends('adminlte::page')

@section('css')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        margin: 2.5cm 2cm 2cm 2cm;
    }

    h1, h2 {
        font-size: 1.5em;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1cm;
    }

    th, td {
        border: 1px solid #000;
        padding: 8px;
        font-size: 0.7em;
    }

    th {
        background-color: #f2f2f2;
    }

    .table-title {
        margin: 20px 0;
    }
</style>
@endsection

@section('content')
<div class="container">
    <h1>Datos de {{ $datospersona->nombre }}</h1>
    <p><strong>Apellido Paterno:</strong> {{ $datospersona->apellidoPaterno }}</p>
    <p><strong>Apellido Materno:</strong> {{ $datospersona->apellidoMaterno }}</p>
    <p><strong>Fecha de Registro:</strong> {{ $datospersona->fecharegistro }}</p>

    @foreach ($tablas as $tabla)
        <div class="table-title">
            <h2>{{ $tabla['titulo'] }}</h2>
        </div>
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
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
    window.jsPDF = window.jspdf.jsPDF;
    window.onload = function() {
        var doc = new jsPDF('p', 'pt', 'a4');
        doc.html(document.querySelector('.container'), {
            callback: function (doc) {
                doc.save('reporte.pdf');
            },
            margin: [40, 60, 40, 60],
            x: 10,
            y: 10
        });
    }
</script>
@endsection
