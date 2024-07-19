@extends('adminlte::page')
@section('content')
    {{-- <h1>Generar PDF</h1>

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
</body>
</html> --}}
    {{-- <h1>Generar PDF</h1>

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
    </form> --}}









    <!-- resources/views/persona/index.blade.php -->

@endsection
