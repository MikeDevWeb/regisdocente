<div class="row padding-1 p-1">
    <div class="col-md-12 row">
        <div class="col-md-6">

            <div class="form-group md-4 mb-2 mb20 text-sm">
                <label for="datospersona_id" class="form-label text-sm">{{ __('Nombre Docente') }}</label>
                <select class="text-sm form-control text-sm text-sm @error('datospersona_id') is-invalid @enderror" name="datospersona_id" id="datospersona_id">
                    <option value="">Seleccione...</option>
                    @foreach ($datospersonas as $datospersona)
                        @php
                            $isRegistered = \App\Models\expdocente::where('datospersona_id', $datospersona->id)
                                ->where('id', '<>', optional($expdocente)->id)
                                ->exists();
                        @endphp
                        <option value="{{ $datospersona->id }}" {{ $datospersona->id == (old('datospersona_id', $expdocente?->datospersona_id) ?: '') ? 'selected' : '' }} {{ $isRegistered ? 'disabled' : '' }}>
                            {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="institucion" class="form-label text-sm">{{ __('Institucion') }}</label>
                <input type="text" name="institucion" class="form-control text-sm @error('institucion') is-invalid @enderror" value="{{ old('institucion', $expdocente?->institucion) }}" id="institucion">
                {!! $errors->first('institucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="carrera" class="form-label text-sm">{{ __('Carrera') }}</label>
                <input type="text" name="carrera" class="form-control text-sm @error('carrera') is-invalid @enderror" value="{{ old('carrera', $expdocente?->carrera) }}" id="carrera">
                {!! $errors->first('carrera', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="fechainicio" class="form-label text-sm">{{ __('Fecha inicio') }}</label>
                <input type="date" name="fechainicio" class="form-control text-sm @error('fechainicio') is-invalid @enderror" value="{{ old('fechainicio', $expdocente?->fechainicio) }}" id="fechainicio">
                {!! $errors->first('fechainicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <div class="col-md-6">

            <div class="form-group mb-2 mb20 text-sm">
                <label for="fechafin" class="form-label text-sm">{{ __('Fecha fin') }}</label>
                <input type="date" name="fechafin" class="form-control text-sm @error('fechafin') is-invalid @enderror" value="{{ old('fechafin', $expdocente?->fechafin) }}" id="fechafin">
                {!! $errors->first('fechafin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="duracion" class="form-label text-sm">{{ __('Duracion') }}</label>
                <input type="text" name="duracion" class="form-control text-sm @error('duracion') is-invalid @enderror" value="{{ old('duracion', $expdocente?->duracion) }}" id="duracion" placeholder="">
                {!! $errors->first('duracion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="user_id" class="form-label text-sm">{{ __('Registrado por') }}</label>
                <input title="Registrado por" readonly hidden required type="text" name="user_id" class="form-control text-sm text-sm @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                <input title="Registrado por" class="form-control text-sm" type="text" readonly='true' value="{{ auth()->user()->name }}">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="fecharegistro" class="form-label text-sm">{{ __('Fecha Registro') }}</label>
                <input readonly required type="text" name="fecharegistro" class="form-control text-sm @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $expdocente?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn-xs btn-primary">{{ __('Registrar') }}</button>
        <button type="button" onclick="history.back()" class="btn-xs btn-secondary">{{ __('Volver') }}</button>
    </div>
</div>
@section('styles')
<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">

@endsection
