@extends('layouts.app')

@section('template_title')
    Pdfprinters
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pdfprinters') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pdfprinters.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

									<th >Articulogeneral Id</th>
									<th >Articulorevista Id</th>
									<th >Contacto Id</th>
									<th >Datospersona Id</th>
									<th >Datospersonb Id</th>
									<th >Expdocente Id</th>
									<th >Expoconferencia Id</th>
									<th >Expoevento Id</th>
									<th >Exposeminario Id</th>
									<th >Expprograrel Id</th>
									<th >Formcurso Id</th>
									<th >Formpostgrado Id</th>
									<th >Formprofesional Id</th>
									<th >Funcadminacad Id</th>
									<th >Libropublicado Id</th>
									<th >Reconocimiento Id</th>
									<th >Textopublicado Id</th>
									<th >Trabproyinvconcluido Id</th>
									<th >Tutortribunal Id</th>
									<th >User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personas as $persona)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $pdfprinter->articulogeneral_id }}</td>
										<td >{{ $pdfprinter->articulorevista_id }}</td>
										<td >{{ $pdfprinter->contacto_id }}</td>
										<td >{{ $pdfprinter->datospersona_id }}</td>
										<td >{{ $pdfprinter->datospersonb_id }}</td>
										<td >{{ $pdfprinter->expdocente_id }}</td>
										<td >{{ $pdfprinter->expoconferencia_id }}</td>
										<td >{{ $pdfprinter->expoevento_id }}</td>
										<td >{{ $pdfprinter->exposeminario_id }}</td>
										<td >{{ $pdfprinter->expprograrel_id }}</td>
										<td >{{ $pdfprinter->formcurso_id }}</td>
										<td >{{ $pdfprinter->formpostgrado_id }}</td>
										<td >{{ $pdfprinter->formprofesional_id }}</td>
										<td >{{ $pdfprinter->funcadminacad_id }}</td>
										<td >{{ $pdfprinter->libropublicado_id }}</td>
										<td >{{ $pdfprinter->reconocimiento_id }}</td>
										<td >{{ $pdfprinter->textopublicado_id }}</td>
										<td >{{ $pdfprinter->trabproyinvconcluido_id }}</td>
										<td >{{ $pdfprinter->tutortribunal_id }}</td>
										<td >{{ $pdfprinter->user_id }}</td>

                                            <td>
                                                <form action="{{ route('pdfprinters.destroy', $pdfprinter->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pdfprinters.show', $pdfprinter->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pdfprinters.edit', $pdfprinter->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pdfprinters->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
