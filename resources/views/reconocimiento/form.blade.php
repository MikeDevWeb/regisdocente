<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12 row">

        <div class="col-md-6">
            <div class="form-group mb-2 mb20 text-sm text-sm">
                <label for="datospersona_id" class="form-label text-sm text-sm">{{ __('Docente') }}</label>
                <select class="text-sm form-control @error('datospersona_id') is-invalid @enderror" name="datospersona_id" id="datospersona_id">
                    <option value="">Seleccione...</option>
                    @foreach ($datospersonas as $datospersona)
                        @php
                            $isRegistered = \App\Models\Reconocimiento::where('datospersona_id', $datospersona->id)
                                ->where('id', '<>', optional($reconocimiento)->id)
                                ->exists();
                        @endphp
                        <option value="{{ $datospersona->id }}" {{ $datospersona->id == (old('datospersona_id', $reconocimiento?->datospersona_id) ?: '') ? 'selected' : '' }} {{ $isRegistered ? 'disabled' : '' }}>
                            {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}
                        </option>
                    @endforeach
                </select>            {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="reconocimiento" class="form-label text-sm">{{ __('Reconocimientos') }}</label>
                <input type="text" name="reconocimiento" class="form-control text-sm @error('reconocimiento') is-invalid @enderror" value="{{ old('reconocimiento', $reconocimiento?->reconocimiento) }}" id="reconocimiento" placeholder="Reconocimiento">
                {!! $errors->first('reconocimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="institucion" class="form-label text-sm">{{ __('Institución') }}</label>
                <input type="text" name="institucion" class="form-control text-sm @error('institucion') is-invalid @enderror" value="{{ old('institucion', $reconocimiento?->institucion) }}" id="institucion" placeholder="Institucion">
                {!! $errors->first('institucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <div class="col-md-6 mt20">

            <div class="form-group mb-2 mb20 text-sm">
                <label for="anio" class="form-label text-sm">{{ __('Año') }}</label>
                <input type="text" name="anio" class="form-control text-sm @error('anio') is-invalid @enderror" value="{{ old('anio', $reconocimiento?->anio) }}" id="anio" placeholder="Anio">
                {!! $errors->first('anio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="actividad" class="form-label text-sm">{{ __('Actividad') }}</label>
                <input type="text" name="actividad" class="form-control text-sm @error('actividad') is-invalid @enderror" value="{{ old('actividad', $reconocimiento?->actividad) }}" id="actividad" placeholder="Actividad">
                {!! $errors->first('actividad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="user_id" class="form-label text-sm">{{ __('Registrado por') }}</label>
                <input title="Registrado por" readonly hidden required type="text" name="user_id" class="form-control text-sm text-sm @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                <input title="Registrado por" class="form-control text-sm text-sm" type="text" readonly='true' value="{{ auth()->user()->name }}">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="fecharegistro" class="form-label text-sm">{{ __('Registrado') }}</label>
                <input readonly required type="text" name="fecharegistro" class="form-control text-sm text-sm @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $reconocimiento?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                    {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn-sm btn-primary">{{ __('Registrar') }}</button>
        <a href="{{ route('reconocimientos.index') }}" class="btn-sm text-center btn-default">{{ __('Volver') }}</a>
    </div>
</div>
