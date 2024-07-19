<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pdfprinter
 *
 * @property $id
 * @property $articulogeneral_id
 * @property $articulorevista_id
 * @property $contacto_id
 * @property $datospersona_id
 * @property $datospersonb_id
 * @property $expdocente_id
 * @property $expoconferencia_id
 * @property $expoevento_id
 * @property $exposeminario_id
 * @property $expprograrel_id
 * @property $formcurso_id
 * @property $formpostgrado_id
 * @property $formprofesional_id
 * @property $funcadminacad_id
 * @property $libropublicado_id
 * @property $reconocimiento_id
 * @property $textopublicado_id
 * @property $trabproyinvconcluido_id
 * @property $tutortribunal_id
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Articulogeneral $articulogeneral
 * @property Articulorevista $articulorevista
 * @property Contacto $contacto
 * @property Datospersona $datospersona
 * @property Datospersonb $datospersonb
 * @property Expdocente $expdocente
 * @property Expoconferencia $expoconferencia
 * @property Expoevento $expoevento
 * @property Exposeminario $exposeminario
 * @property Expprograrel $expprograrel
 * @property Formcurso $formcurso
 * @property Formpostgrado $formpostgrado
 * @property Formprofesional $formprofesional
 * @property Funcadminacad $funcadminacad
 * @property Libropublicado $libropublicado
 * @property Reconocimiento $reconocimiento
 * @property Textopublicado $textopublicado
 * @property Trabproyinvconcluido $trabproyinvconcluido
 * @property Tutortribunal $tutortribunal
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pdfprinter extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['articulogeneral_id', 'articulorevista_id', 'contacto_id', 'datospersona_id', 'datospersonb_id', 'expdocente_id', 'expoconferencia_id', 'expoevento_id', 'exposeminario_id', 'expprograrel_id', 'formcurso_id', 'formpostgrado_id', 'formprofesional_id', 'funcadminacad_id', 'libropublicado_id', 'reconocimiento_id', 'textopublicado_id', 'trabproyinvconcluido_id', 'tutortribunal_id', 'user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articulogeneral()
    {
        return $this->belongsTo(\App\Models\Articulogeneral::class, 'articulogeneral_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articulorevista()
    {
        return $this->belongsTo(\App\Models\Articulorevista::class, 'articulorevista_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contacto()
    {
        return $this->belongsTo(\App\Models\Contacto::class, 'contacto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function datospersona()
    {
        return $this->belongsTo(\App\Models\Datospersona::class, 'datospersona_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function datospersonb()
    {
        return $this->belongsTo(\App\Models\Datospersonb::class, 'datospersonb_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function expdocente()
    {
        return $this->belongsTo(\App\Models\Expdocente::class, 'expdocente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function expoconferencia()
    {
        return $this->belongsTo(\App\Models\Expoconferencia::class, 'expoconferencia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function expoevento()
    {
        return $this->belongsTo(\App\Models\Expoevento::class, 'expoevento_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exposeminario()
    {
        return $this->belongsTo(\App\Models\Exposeminario::class, 'exposeminario_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function expprograrel()
    {
        return $this->belongsTo(\App\Models\Expprograrel::class, 'expprograrel_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function formcurso()
    {
        return $this->belongsTo(\App\Models\Formcurso::class, 'formcurso_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function formpostgrado()
    {
        return $this->belongsTo(\App\Models\Formpostgrado::class, 'formpostgrado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function formprofesional()
    {
        return $this->belongsTo(\App\Models\Formprofesional::class, 'formprofesional_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function funcadminacad()
    {
        return $this->belongsTo(\App\Models\Funcadminacad::class, 'funcadminacad_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function libropublicado()
    {
        return $this->belongsTo(\App\Models\Libropublicado::class, 'libropublicado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reconocimiento()
    {
        return $this->belongsTo(\App\Models\Reconocimiento::class, 'reconocimiento_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function textopublicado()
    {
        return $this->belongsTo(\App\Models\Textopublicado::class, 'textopublicado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trabproyinvconcluido()
    {
        return $this->belongsTo(\App\Models\Trabproyinvconcluido::class, 'trabproyinvconcluido_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tutortribunal()
    {
        return $this->belongsTo(\App\Models\Tutortribunal::class, 'tutortribunal_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
}
