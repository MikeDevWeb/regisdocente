<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="articulogeneral_id" class="form-label">{{ __('Articulogeneral Id') }}</label>
            <input type="text" name="articulogeneral_id" class="form-control @error('articulogeneral_id') is-invalid @enderror" value="{{ old('articulogeneral_id', $pdfprinter?->articulogeneral_id) }}" id="articulogeneral_id" placeholder="Articulogeneral Id">
            {!! $errors->first('articulogeneral_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="articulorevista_id" class="form-label">{{ __('Articulorevista Id') }}</label>
            <input type="text" name="articulorevista_id" class="form-control @error('articulorevista_id') is-invalid @enderror" value="{{ old('articulorevista_id', $pdfprinter?->articulorevista_id) }}" id="articulorevista_id" placeholder="Articulorevista Id">
            {!! $errors->first('articulorevista_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="contacto_id" class="form-label">{{ __('Contacto Id') }}</label>
            <input type="text" name="contacto_id" class="form-control @error('contacto_id') is-invalid @enderror" value="{{ old('contacto_id', $pdfprinter?->contacto_id) }}" id="contacto_id" placeholder="Contacto Id">
            {!! $errors->first('contacto_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="datospersona_id" class="form-label">{{ __('Datospersona Id') }}</label>
            <input type="text" name="datospersona_id" class="form-control @error('datospersona_id') is-invalid @enderror" value="{{ old('datospersona_id', $pdfprinter?->datospersona_id) }}" id="datospersona_id" placeholder="Datospersona Id">
            {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="datospersonb_id" class="form-label">{{ __('Datospersonb Id') }}</label>
            <input type="text" name="datospersonb_id" class="form-control @error('datospersonb_id') is-invalid @enderror" value="{{ old('datospersonb_id', $pdfprinter?->datospersonb_id) }}" id="datospersonb_id" placeholder="Datospersonb Id">
            {!! $errors->first('datospersonb_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="expdocente_id" class="form-label">{{ __('Expdocente Id') }}</label>
            <input type="text" name="expdocente_id" class="form-control @error('expdocente_id') is-invalid @enderror" value="{{ old('expdocente_id', $pdfprinter?->expdocente_id) }}" id="expdocente_id" placeholder="Expdocente Id">
            {!! $errors->first('expdocente_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="expoconferencia_id" class="form-label">{{ __('Expoconferencia Id') }}</label>
            <input type="text" name="expoconferencia_id" class="form-control @error('expoconferencia_id') is-invalid @enderror" value="{{ old('expoconferencia_id', $pdfprinter?->expoconferencia_id) }}" id="expoconferencia_id" placeholder="Expoconferencia Id">
            {!! $errors->first('expoconferencia_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="expoevento_id" class="form-label">{{ __('Expoevento Id') }}</label>
            <input type="text" name="expoevento_id" class="form-control @error('expoevento_id') is-invalid @enderror" value="{{ old('expoevento_id', $pdfprinter?->expoevento_id) }}" id="expoevento_id" placeholder="Expoevento Id">
            {!! $errors->first('expoevento_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="exposeminario_id" class="form-label">{{ __('Exposeminario Id') }}</label>
            <input type="text" name="exposeminario_id" class="form-control @error('exposeminario_id') is-invalid @enderror" value="{{ old('exposeminario_id', $pdfprinter?->exposeminario_id) }}" id="exposeminario_id" placeholder="Exposeminario Id">
            {!! $errors->first('exposeminario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="expprograrel_id" class="form-label">{{ __('Expprograrel Id') }}</label>
            <input type="text" name="expprograrel_id" class="form-control @error('expprograrel_id') is-invalid @enderror" value="{{ old('expprograrel_id', $pdfprinter?->expprograrel_id) }}" id="expprograrel_id" placeholder="Expprograrel Id">
            {!! $errors->first('expprograrel_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="formcurso_id" class="form-label">{{ __('Formcurso Id') }}</label>
            <input type="text" name="formcurso_id" class="form-control @error('formcurso_id') is-invalid @enderror" value="{{ old('formcurso_id', $pdfprinter?->formcurso_id) }}" id="formcurso_id" placeholder="Formcurso Id">
            {!! $errors->first('formcurso_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="formpostgrado_id" class="form-label">{{ __('Formpostgrado Id') }}</label>
            <input type="text" name="formpostgrado_id" class="form-control @error('formpostgrado_id') is-invalid @enderror" value="{{ old('formpostgrado_id', $pdfprinter?->formpostgrado_id) }}" id="formpostgrado_id" placeholder="Formpostgrado Id">
            {!! $errors->first('formpostgrado_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="formprofesional_id" class="form-label">{{ __('Formprofesional Id') }}</label>
            <input type="text" name="formprofesional_id" class="form-control @error('formprofesional_id') is-invalid @enderror" value="{{ old('formprofesional_id', $pdfprinter?->formprofesional_id) }}" id="formprofesional_id" placeholder="Formprofesional Id">
            {!! $errors->first('formprofesional_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="funcadminacad_id" class="form-label">{{ __('Funcadminacad Id') }}</label>
            <input type="text" name="funcadminacad_id" class="form-control @error('funcadminacad_id') is-invalid @enderror" value="{{ old('funcadminacad_id', $pdfprinter?->funcadminacad_id) }}" id="funcadminacad_id" placeholder="Funcadminacad Id">
            {!! $errors->first('funcadminacad_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="libropublicado_id" class="form-label">{{ __('Libropublicado Id') }}</label>
            <input type="text" name="libropublicado_id" class="form-control @error('libropublicado_id') is-invalid @enderror" value="{{ old('libropublicado_id', $pdfprinter?->libropublicado_id) }}" id="libropublicado_id" placeholder="Libropublicado Id">
            {!! $errors->first('libropublicado_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="reconocimiento_id" class="form-label">{{ __('Reconocimiento Id') }}</label>
            <input type="text" name="reconocimiento_id" class="form-control @error('reconocimiento_id') is-invalid @enderror" value="{{ old('reconocimiento_id', $pdfprinter?->reconocimiento_id) }}" id="reconocimiento_id" placeholder="Reconocimiento Id">
            {!! $errors->first('reconocimiento_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="textopublicado_id" class="form-label">{{ __('Textopublicado Id') }}</label>
            <input type="text" name="textopublicado_id" class="form-control @error('textopublicado_id') is-invalid @enderror" value="{{ old('textopublicado_id', $pdfprinter?->textopublicado_id) }}" id="textopublicado_id" placeholder="Textopublicado Id">
            {!! $errors->first('textopublicado_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="trabproyinvconcluido_id" class="form-label">{{ __('Trabproyinvconcluido Id') }}</label>
            <input type="text" name="trabproyinvconcluido_id" class="form-control @error('trabproyinvconcluido_id') is-invalid @enderror" value="{{ old('trabproyinvconcluido_id', $pdfprinter?->trabproyinvconcluido_id) }}" id="trabproyinvconcluido_id" placeholder="Trabproyinvconcluido Id">
            {!! $errors->first('trabproyinvconcluido_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tutortribunal_id" class="form-label">{{ __('Tutortribunal Id') }}</label>
            <input type="text" name="tutortribunal_id" class="form-control @error('tutortribunal_id') is-invalid @enderror" value="{{ old('tutortribunal_id', $pdfprinter?->tutortribunal_id) }}" id="tutortribunal_id" placeholder="Tutortribunal Id">
            {!! $errors->first('tutortribunal_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $pdfprinter?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>