<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $reconocimiento->name ?? __('Revisar') . " " . __('Reconocimiento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-sm">
                    <div class="card-header text-sm" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title text-sm">{{ __('Revisar') }} Reconocimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('reconocimientos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white text-sm">

                                <div class="form-group mb-2 mb20">
                                    <strong>Reconocimientos:</strong>
                                    {{ $reconocimiento->reconocimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Institución:</strong>
                                    {{ $reconocimiento->institucion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Año:</strong>
                                    {{ $reconocimiento->anio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Actividad:</strong>
                                    {{ $reconocimiento->actividad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Docente:</strong>
                                    {{ $reconocimiento->datospersona->nombre }} {{ $reconocimiento->datospersona->apellidoPaterno }} {{ $reconocimiento->datospersona->apellidoMaterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registrado por:</strong>
                                    {{ $reconocimiento->user->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registrado:</strong>
                                    {{ $reconocimiento->fecharegistro }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
