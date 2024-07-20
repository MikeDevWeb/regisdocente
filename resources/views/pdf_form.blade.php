@extends('adminlte::page')

@section('content')
    <h1>Generar PDF</h1>

    <form action="{{ url('/generate-pdf') }}" method="GET">
        <label for="persona">Persona:</label>
        <select name="persona" id="persona" required>
            <option value="">Seleccione una persona</option>
            @foreach ($personas as $persona)
                <option value="{{ $persona->id }}">{{ $persona->nombre }} {{ $persona->apellidoPaterno }} {{ $persona->apellidoMaterno }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Generar PDF</button>
    </form>
@endsection




{{-- FUNCIONA EL DE ABAJO --}}
{{-- @extends('adminlte::page')
@section('content')
    <h1>Generar PDF</h1>

    <form action="{{ route('generate-pdf', ['id' => 'persona_id']) }}" method="GET" id="generate-pdf-form">
        <label for="persona">Persona:</label>
        <select name="persona_id" id="persona" required>
            <option value="">Seleccione una persona</option>
            @foreach ($personas as $persona)
                <option value="{{ $persona->id }}">{{ $persona->nombre }} {{ $persona->apellidoPaterno }} {{ $persona->apellidoMaterno }}</option>
            @endforeach
        </select>
        <br>

        <button type="submit">Generar PDF</button>
    </form>

    <script>
        document.getElementById('generate-pdf-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const personaId = document.getElementById('persona').value;
            if (personaId) {
                window.location.href = `{{ url('/generate-pdf') }}/${personaId}`;
            }
        });
    </script>
@endsection --}}
