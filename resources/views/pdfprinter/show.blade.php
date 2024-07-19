@extends('layouts.app')

@section('template_title')
    {{ $pdfprinter->name ?? __('Show') . " " . __('Pdfprinter') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pdfprinter</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pdfprinters.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Articulogeneral Id:</strong>
                                    {{ $pdfprinter->articulogeneral_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Articulorevista Id:</strong>
                                    {{ $pdfprinter->articulorevista_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contacto Id:</strong>
                                    {{ $pdfprinter->contacto_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Datospersona Id:</strong>
                                    {{ $pdfprinter->datospersona_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Datospersonb Id:</strong>
                                    {{ $pdfprinter->datospersonb_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Expdocente Id:</strong>
                                    {{ $pdfprinter->expdocente_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Expoconferencia Id:</strong>
                                    {{ $pdfprinter->expoconferencia_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Expoevento Id:</strong>
                                    {{ $pdfprinter->expoevento_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Exposeminario Id:</strong>
                                    {{ $pdfprinter->exposeminario_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Expprograrel Id:</strong>
                                    {{ $pdfprinter->expprograrel_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Formcurso Id:</strong>
                                    {{ $pdfprinter->formcurso_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Formpostgrado Id:</strong>
                                    {{ $pdfprinter->formpostgrado_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Formprofesional Id:</strong>
                                    {{ $pdfprinter->formprofesional_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Funcadminacad Id:</strong>
                                    {{ $pdfprinter->funcadminacad_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Libropublicado Id:</strong>
                                    {{ $pdfprinter->libropublicado_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Reconocimiento Id:</strong>
                                    {{ $pdfprinter->reconocimiento_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Textopublicado Id:</strong>
                                    {{ $pdfprinter->textopublicado_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Trabproyinvconcluido Id:</strong>
                                    {{ $pdfprinter->trabproyinvconcluido_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tutortribunal Id:</strong>
                                    {{ $pdfprinter->tutortribunal_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $pdfprinter->user_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
