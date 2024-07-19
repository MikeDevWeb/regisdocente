

<title>Seleccionar Persona</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        width: 50%;
        margin: 0 auto;
        text-align: center;
        margin-top: 50px;
    }
    select, button {
        padding: 10px;
        margin-top: 20px;
        font-size: 16px;
    }
    button {
        cursor: pointer;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Seleccionar Persona</h1>
    <form action="{{ route('persona.redirectToShow') }}" method="POST">
        @csrf
        <label for="persona_id">Seleccione el ID de la Persona:</label>
        <select name="persona_id" id="persona_id" required>
            <option value="" disabled selected>Seleccione un ID</option>
            @foreach($personas as $persona)
                <option value="{{ $persona->id }}">{{ $persona->id }} - {{ $persona->nombre }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Ver Detalles</button>
    </form>
</div>
</body>
</html>
