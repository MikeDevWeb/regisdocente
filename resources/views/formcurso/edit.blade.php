<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ __('Modificar') }} Formación de Curso/Seminario/Otro
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Modificar') }} Formación de Curso/Seminario/Otro</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('formcursos.update', $formcurso->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('formcurso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
