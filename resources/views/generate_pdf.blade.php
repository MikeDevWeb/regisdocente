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




{{-- @extends('adminlte::page')
@section('content')
<html lang="es">
    <meta charset="UTF-8">
    <div class="card">
    <div class="card-header"> <p>Generar PDF</p></div>
    <button id="downloadPdf">Descargar PDF</button>
</div>
    <div id="pdfContent">
        @include('pdf_template', ['datospersona' => $datospersona, 'tablas' => $tablas])
    </div>

    <script>
        document.getElementById('downloadPdf').addEventListener('click', function () {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            doc.html(document.getElementById('pdfContent'), {
                callback: function (doc) {
                    doc.save('documento.pdf');
                },
                x: 10,
                y: 10
            });
        });
    </script>
</body>
</html>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
@endsection --}}
