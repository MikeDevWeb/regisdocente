<?php
// namespace App\Http\Controllers;

// use App\Models\Datospersonb;
// use Illuminate\Http\Request;
// use App\Models\DatosPersona;
// use App\Models\Articulogeneral;
// use App\Models\Articulorevista;
// use App\Models\Contacto;
// use App\Models\Expdocente;
// use App\Models\Expoconferencia;
// use App\Models\Expoevento;
// use App\Models\Exposeminario;
// use App\Models\Expprograrel;
// use App\Models\Formcurso;
// use App\Models\Formpostgrado;
// use App\Models\Formprofesional;
// use App\Models\Funcadminacad;
// use App\Models\Libropublicado;
// use App\Models\Reconocimiento;
// use App\Models\Textopublicado;
// use App\Models\Tutortribunal;
// use App\Models\Trabproyinvconcluido;

// class PdfController extends Controller
// {
//     public function selectPersona()
//     {
//         $datospersonas = DatosPersona::all();
//         return view('select_person', compact('datospersonas'));
//     }

//     public function generarPdf(Request $request)
//     {
//         $persona_id = $request->input('persona_id');

//         $datospersona = DatosPersona::find($persona_id);

//         if (!$datospersona) {
//             return redirect()->back()->with('error', 'Persona no encontrada');
//         }

//         // Obtener datos de todas las tablas relacionadas
//         // $datospersonass = Datospersona::where('datospersona_id', $persona_id)->get();
//         $articulogenerals = Articulogeneral::where('datospersona_id', $persona_id)->get();
//         $articulorevistas = Articulorevista::where('datospersona_id', $persona_id)->get();
//         $contactos = Contacto::where('datospersona_id', $persona_id)->get();
//         $datospersonbs = Datospersonb::where('datospersona_id', $persona_id)->get();
//         $expdocentes = Expdocente::where('datospersona_id', $persona_id)->get();
//         $expoconferencias = Expoconferencia::where('datospersona_id', $persona_id)->get();
//         $expoeventos = Expoevento::where('datospersona_id', $persona_id)->get();
//         $exposeminarios = Exposeminario::where('datospersona_id', $persona_id)->get();
//         $expprograrels = Expprograrel::where('datospersona_id', $persona_id)->get();
//         $formcursos = Formcurso::where('datospersona_id', $persona_id)->get();
//         $formpostgrados = Formpostgrado::where('datospersona_id', $persona_id)->get();
//         $formprofesionals = Formprofesional::where('datospersona_id', $persona_id)->get();
//         $funcadminacads = Funcadminacad::where('datospersona_id', $persona_id)->get();
//         $libropublicados = Libropublicado::where('datospersona_id', $persona_id)->get();
//         $reconocimientos = Reconocimiento::where('datospersona_id', $persona_id)->get();
//         $textopublicados = Textopublicado::where('datospersona_id', $persona_id)->get();
//         $tutortribunals = Tutortribunal::where('datospersona_id', $persona_id)->get();
//         $trabproyinvconcluidos = Trabproyinvconcluido::where('datospersona_id', $persona_id)->get();

//         $tablas = [
//             // [
//             //     'titulo' => 'Datos Personales',
//             //     'columnas' => ['nombre', 'apellidoPaterno', 'apellidoMaterno', 'profesion', 'fechaNacimiento', 'lugarNacimiento', 'edad', 'estadoCivil', 'sexo', 'carnetidentidad', 'ciexpedido'],
//             //     'filas' => $datospersonass->toArray()
//             // ],
//             [
//                 'titulo' => 'Idiomas',
//                 'columnas' => ['idiomaNativo', 'nivelidiomaescritura', 'nivelidiomalectura', 'nivelidiomahabla', 'idiomaSecundario', 'nivelidiomaSecundarioescritura', 'nivelidiomaSecundariolectura', 'nivelidiomaSecundariohabla'], // Ajusta los nombres de las columnas
//                 'filas' => $datospersonbs->toArray()
//             ],
//             [
//                 'titulo' => 'Artículos Generales',
//                 'columnas' => ['nombrearticulo', 'anio', 'organopublicacion', 'autor', 'coautor'], // Ajusta los nombres de las columnas
//                 'filas' => $articulogenerals->toArray()
//             ],
//             [
//                 'titulo' => 'Artículos de Revista',
//                 'columnas' => ['nombrearticulo', 'anio', 'organopublicacion', 'autor', 'coautor'], // Ajusta los nombres de las columnas
//                 'filas' => $articulorevistas->toArray()
//             ],
//             [
//                 'titulo' => 'Contactos',
//                 'columnas' => ['ciudadresidencia', 'direccion', 'telefonofijo', 'celular', 'correo', 'facebook', 'twitter', 'linkedin', 'instagram', 'telegram', 'whatsapp'], // Ajusta los nombres de las columnas
//                 'filas' => $contactos->toArray()
//             ],
//             [
//                 'titulo' => 'Experiencia Docente',
//                 'columnas' => ['institucion', 'carrera', 'fechainicio', 'fechafin', 'duracion'], // Ajusta los nombres de las columnas
//                 'filas' => $expdocentes->toArray()
//             ],
//             [
//                 'titulo' => 'Expositor en Conferencias',
//                 'columnas' => ['institucion', 'tipoevento', 'tematica', 'fechainicio', 'fechafin', 'duracion'], // Ajusta los nombres de las columnas
//                 'filas' => $expoconferencias->toArray()
//             ],
//             [
//                 'titulo' => 'Expositor en Eventos',
//                 'columnas' => ['institucion', 'tipoevento', 'tematica', 'fechainicio', 'fechafin', 'duracion'], // Ajusta los nombres de las columnas
//                 'filas' => $expoeventos->toArray()
//             ],
//             [
//                 'titulo' => 'Expositor en Seminarios',
//                 'columnas' => ['institucion', 'tipoevento', 'tematica', 'fechainicio', 'fechafin', 'duracion'], // Ajusta los nombres de las columnas
//                 'filas' => $exposeminarios->toArray()
//             ],
//             [
//                 'titulo' => 'Experiencia en Programas Relacionados',
//                 'columnas' => ['institucion', 'cargoactividad', 'fechainicio', 'fechafin', 'duracion'], // Ajusta los nombres de las columnas
//                 'filas' => $expprograrels->toArray()
//             ],
//             [
//                 'titulo' => 'Formación en Cursos',
//                 'columnas' => ['institucion', 'tipo', 'nombreevento', 'fechainicio', 'fechafin', 'duracion'], // Ajusta los nombres de las columnas
//                 'filas' => $formcursos->toArray()
//             ],
//             [
//                 'titulo' => 'Postgrados',
//                 'columnas' => ['institucionUniversidad', 'anio', 'gradoacademico', 'titulodiploma'], // Ajusta los nombres de las columnas
//                 'filas' => $formpostgrados->toArray()
//             ],
//             [
//                 'titulo' => 'Formación Profesional',
//                 'columnas' => ['fecharegistro', 'universidad', 'anio', 'gradoacademico', 'titulodiploma'], // Ajusta los nombres de las columnas
//                 'filas' => $formprofesionals->toArray()
//             ],
//             [
//                 'titulo' => 'Funciones Administrativas Académicas',
//                 'columnas' => ['institucion', 'cargoempleado', 'fechainicio', 'fechafin', 'duracion'], // Ajusta los nombres de las columnas
//                 'filas' => $funcadminacads->toArray()
//             ],
//             [
//                 'titulo' => 'Libros Publicados',
//                 'columnas' => ['titulo', 'anio', 'autor', 'coautor'], // Ajusta los nombres de las columnas
//                 'filas' => $libropublicados->toArray()
//             ],
//             [
//                 'titulo' => 'Reconocimientos',
//                 'columnas' => ['reconocimiento', 'institucion', 'anio', 'actividad'], // Ajusta los nombres de las columnas
//                 'filas' => $reconocimientos->toArray()
//             ],
//             [
//                 'titulo' => 'Textos Publicados',
//                 'columnas' => ['titulo', 'anio', 'autor', 'coautor'], // Ajusta los nombres de las columnas
//                 'filas' => $textopublicados->toArray()
//             ],
//             [
//                 'titulo' => 'Tutorías y Tribunales',
//                 'columnas' => ['institucion', 'pregradopostgrado', 'nivelprograma', 'tutorevalutribu', 'tituloinvestigacion'], // Ajusta los nombres de las columnas
//                 'filas' => $tutortribunals->toArray()
//             ],
//             [
//                 'titulo' => 'Proyectos e Investigaciones Concluidos',
//                 'columnas' => ['trabajoproyecto', 'fechainicio', 'fechafin', 'duracion', 'autor', 'coautor'], // Ajusta los nombres de las columnas
//                 'filas' => $trabproyinvconcluidos->toArray()
//             ]
//         ];

//         return view('pdf_template', compact('datospersona', 'tablas'));
//     }
// }



// namespace App\Http\Controllers;

// use App\Models\DatosPersona;
// use App\Models\Articulogeneral;
// use App\Models\Articulorevista;
// use App\Models\Contacto;
// use App\Models\Expdocente;
// use App\Models\Expoconferencia;
// use App\Models\Expoevento;
// use App\Models\Exposeminario;
// use App\Models\Expprograrel;
// use App\Models\Formcurso;
// use App\Models\Formpostgrado;
// use App\Models\Formprofesional;
// use App\Models\Funcadminacad;
// use App\Models\Libropublicado;
// use App\Models\Reconocimiento;
// use App\Models\Textopublicado;
// use App\Models\Tutortribunal;
// use App\Models\Trabproyinvconcluido;
// use Illuminate\Http\Request;

// class PdfController extends Controller
// {
//     public function generarPdf(Request $request)
//     {
//         $persona_id = $request->input('persona_id');

//         if (!$persona_id) {
//             return redirect()->back()->with('error', 'ID de persona no proporcionado.');
//         }

//         $datospersona = DatosPersona::find($persona_id);

//         if (!$datospersona) {
//             return redirect()->back()->with('error', 'Persona no encontrada');
//         }

//         $articulogenerals = Articulogeneral::where('datospersona_id', $persona_id)
//             ->get(['nombrearticulo', 'anio', 'organopublicacion', 'autor', 'coautor'])
//             ->toArray();

//         $articulorevistas = Articulorevista::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'revista', 'fecha_publicacion'])
//             ->toArray();

//         $contactos = Contacto::where('datospersona_id', $persona_id)
//             ->get(['tipo', 'detalle', 'preferencia'])
//             ->toArray();

//         $expdocentes = Expdocente::where('datospersona_id', $persona_id)
//             ->get(['institucion', 'nivel', 'asignatura', 'anio_inicio', 'anio_fin'])
//             ->toArray();

//         $expoconferencias = Expoconferencia::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'evento', 'lugar', 'anio'])
//             ->toArray();

//         $expoeventos = Expoevento::where('datospersona_id', $persona_id)
//             ->get(['nombre', 'tipo', 'lugar', 'anio'])
//             ->toArray();

//         $exposeminarios = Exposeminario::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'institucion', 'anio'])
//             ->toArray();

//         $expprograrels = Expprograrel::where('datospersona_id', $persona_id)
//             ->get(['programa', 'institucion', 'anio'])
//             ->toArray();

//         $formcursos = Formcurso::where('datospersona_id', $persona_id)
//             ->get(['nombre', 'institucion', 'anio'])
//             ->toArray();

//         $formpostgrados = Formpostgrado::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'institucion', 'anio'])
//             ->toArray();

//         $formprofesionals = Formprofesional::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'institucion', 'anio'])
//             ->toArray();

//         $funcadminacads = Funcadminacad::where('datospersona_id', $persona_id)
//             ->get(['nombre', 'institucion', 'anio_inicio', 'anio_fin'])
//             ->toArray();

//         $libropublicados = Libropublicado::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'editorial', 'anio'])
//             ->toArray();

//         $reconocimientos = Reconocimiento::where('datospersona_id', $persona_id)
//             ->get(['nombre', 'institucion', 'anio'])
//             ->toArray();

//         $textopublicados = Textopublicado::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'editorial', 'anio'])
//             ->toArray();

//         $tutortribunals = Tutortribunal::where('datospersona_id', $persona_id)
//             ->get(['nombre_tesis', 'nivel_academico', 'institucion', 'anio'])
//             ->toArray();

//         $trabproyinvconcluidos = Trabproyinvconcluido::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'institucion', 'anio'])
//             ->toArray();

//         $tablas = [
//             [
//                 'titulo' => 'Artículos Generales',
//                 'columnas' => ['Nombre Artículo', 'Año', 'Órgano de Publicación', 'Autor', 'Coautor'],
//                 'filas' => $articulogenerals
//             ],
//             [
//                 'titulo' => 'Artículos de Revista',
//                 'columnas' => ['Título', 'Revista', 'Fecha de Publicación'],
//                 'filas' => $articulorevistas
//             ],
//             [
//                 'titulo' => 'Contactos',
//                 'columnas' => ['Tipo', 'Detalle', 'Preferencia'],
//                 'filas' => $contactos
//             ],
//             [
//                 'titulo' => 'Experiencia Docente',
//                 'columnas' => ['Institución', 'Nivel', 'Asignatura', 'Año Inicio', 'Año Fin'],
//                 'filas' => $expdocentes
//             ],
//             [
//                 'titulo' => 'Conferencias',
//                 'columnas' => ['Título', 'Evento', 'Lugar', 'Año'],
//                 'filas' => $expoconferencias
//             ],
//             [
//                 'titulo' => 'Eventos',
//                 'columnas' => ['Nombre', 'Tipo', 'Lugar', 'Año'],
//                 'filas' => $expoeventos
//             ],
//             [
//                 'titulo' => 'Seminarios',
//                 'columnas' => ['Título', 'Institución', 'Año'],
//                 'filas' => $exposeminarios
//             ],
//             [
//                 'titulo' => 'Programas Relacionados',
//                 'columnas' => ['Programa', 'Institución', 'Año'],
//                 'filas' => $expprograrels
//             ],
//             [
//                 'titulo' => 'Cursos',
//                 'columnas' => ['Nombre', 'Institución', 'Año'],
//                 'filas' => $formcursos
//             ],
//             [
//                 'titulo' => 'Postgrados',
//                 'columnas' => ['Título', 'Institución', 'Año'],
//                 'filas' => $formpostgrados
//             ],
//             [
//                 'titulo' => 'Formación Profesional',
//                 'columnas' => ['Título', 'Institución', 'Año'],
//                 'filas' => $formprofesionals
//             ],
//             [
//                 'titulo' => 'Funciones Administrativas Académicas',
//                 'columnas' => ['Nombre', 'Institución', 'Año Inicio', 'Año Fin'],
//                 'filas' => $funcadminacads
//             ],
//             [
//                 'titulo' => 'Libros Publicados',
//                 'columnas' => ['Título', 'Editorial', 'Año'],
//                 'filas' => $libropublicados
//             ],
//             [
//                 'titulo' => 'Reconocimientos',
//                 'columnas' => ['Nombre', 'Institución', 'Año'],
//                 'filas' => $reconocimientos
//             ],
//             [
//                 'titulo' => 'Textos Publicados',
//                 'columnas' => ['Título', 'Editorial', 'Año'],
//                 'filas' => $textopublicados
//             ],
//             [
//                 'titulo' => 'Tutores y Tribunales',
//                 'columnas' => ['Nombre Tesis', 'Nivel Académico', 'Institución', 'Año'],
//                 'filas' => $tutortribunals
//             ],
//             [
//                 'titulo' => 'Trabajos y Proyectos de Investigación Concluidos',
//                 'columnas' => ['Título', 'Institución', 'Año'],
//                 'filas' => $trabproyinvconcluidos
//             ]
//         ];

//         return view('pdf_template', compact('datospersona', 'tablas'));
//     }
// }


// namespace App\Http\Controllers;

// use App\Models\DatosPersona;
// use App\Models\Articulogeneral;
// use App\Models\Articulorevista;
// use App\Models\Contacto;
// use App\Models\Expdocente;
// use App\Models\Expoconferencia;
// use App\Models\Expoevento;
// use App\Models\Exposeminario;
// use App\Models\Expprograrel;
// use App\Models\Formcurso;
// use App\Models\Formpostgrado;
// use App\Models\Formprofesional;
// use App\Models\Funcadminacad;
// use App\Models\Libropublicado;
// use App\Models\Reconocimiento;
// use App\Models\Textopublicado;
// use App\Models\Tutortribunal;
// use App\Models\Trabproyinvconcluido;
// use Illuminate\Http\Request;

// class PdfController extends Controller
// {
//     public function selectPersona(Request $request)
//     {
//         return view('select_persona');
//     }

//     public function generarPdf(Request $request)
//     {
//         $persona_id = $request->input('persona_id');

//         if (!$persona_id) {
//             return redirect()->back()->with('error', 'ID de persona no proporcionado.');
//         }

//         $datospersona = DatosPersona::find($persona_id);

//         if (!$datospersona) {
//             return redirect()->back()->with('error', 'Persona no encontrada');
//         }

//         $articulogenerals = Articulogeneral::where('datospersona_id', $persona_id)
//             ->get(['nombrearticulo', 'anio', 'organopublicacion', 'autor', 'coautor'])
//             ->toArray();

//         $articulorevistas = Articulorevista::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'revista', 'fecha_publicacion'])
//             ->toArray();

//         $contactos = Contacto::where('datospersona_id', $persona_id)
//             ->get(['tipo', 'detalle', 'preferencia'])
//             ->toArray();

//         $expdocentes = Expdocente::where('datospersona_id', $persona_id)
//             ->get(['institucion', 'nivel', 'asignatura', 'anio_inicio', 'anio_fin'])
//             ->toArray();

//         $expoconferencias = Expoconferencia::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'evento', 'lugar', 'anio'])
//             ->toArray();

//         $expoeventos = Expoevento::where('datospersona_id', $persona_id)
//             ->get(['nombre', 'tipo', 'lugar', 'anio'])
//             ->toArray();

//         $exposeminarios = Exposeminario::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'institucion', 'anio'])
//             ->toArray();

//         $expprograrels = Expprograrel::where('datospersona_id', $persona_id)
//             ->get(['programa', 'institucion', 'anio'])
//             ->toArray();

//         $formcursos = Formcurso::where('datospersona_id', $persona_id)
//             ->get(['nombre', 'institucion', 'anio'])
//             ->toArray();

//         $formpostgrados = Formpostgrado::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'institucion', 'anio'])
//             ->toArray();

//         $formprofesionals = Formprofesional::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'institucion', 'anio'])
//             ->toArray();

//         $funcadminacads = Funcadminacad::where('datospersona_id', $persona_id)
//             ->get(['nombre', 'institucion', 'anio_inicio', 'anio_fin'])
//             ->toArray();

//         $libropublicados = Libropublicado::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'editorial', 'anio'])
//             ->toArray();

//         $reconocimientos = Reconocimiento::where('datospersona_id', $persona_id)
//             ->get(['nombre', 'institucion', 'anio'])
//             ->toArray();

//         $textopublicados = Textopublicado::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'editorial', 'anio'])
//             ->toArray();

//         $tutortribunals = Tutortribunal::where('datospersona_id', $persona_id)
//             ->get(['nombre_tesis', 'nivel_academico', 'institucion', 'anio'])
//             ->toArray();

//         $trabproyinvconcluidos = Trabproyinvconcluido::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'institucion', 'anio'])
//             ->toArray();

//         $tablas = [
//             [
//                 'titulo' => 'Artículos Generales',
//                 'columnas' => ['Nombre Artículo', 'Año', 'Órgano de Publicación', 'Autor', 'Coautor'],
//                 'filas' => $articulogenerals
//             ],
//             [
//                 'titulo' => 'Artículos de Revista',
//                 'columnas' => ['Título', 'Revista', 'Fecha de Publicación'],
//                 'filas' => $articulorevistas
//             ],
//             [
//                 'titulo' => 'Contactos',
//                 'columnas' => ['Tipo', 'Detalle', 'Preferencia'],
//                 'filas' => $contactos
//             ],
//             [
//                 'titulo' => 'Experiencia Docente',
//                 'columnas' => ['Institución', 'Nivel', 'Asignatura', 'Año Inicio', 'Año Fin'],
//                 'filas' => $expdocentes
//             ],
//             [
//                 'titulo' => 'Conferencias',
//                 'columnas' => ['Título', 'Evento', 'Lugar', 'Año'],
//                 'filas' => $expoconferencias
//             ],
//             [
//                 'titulo' => 'Eventos',
//                 'columnas' => ['Nombre', 'Tipo', 'Lugar', 'Año'],
//                 'filas' => $expoeventos
//             ],
//             [
//                 'titulo' => 'Seminarios',
//                 'columnas' => ['Título', 'Institución', 'Año'],
//                 'filas' => $exposeminarios
//             ],
//             [
//                 'titulo' => 'Programas Relacionados',
//                 'columnas' => ['Programa', 'Institución', 'Año'],
//                 'filas' => $expprograrels
//             ],
//             [
//                 'titulo' => 'Cursos',
//                 'columnas' => ['Nombre', 'Institución', 'Año'],
//                 'filas' => $formcursos
//             ],
//             [
//                 'titulo' => 'Postgrados',
//                 'columnas' => ['Título', 'Institución', 'Año'],
//                 'filas' => $formpostgrados
//             ],
//             [
//                 'titulo' => 'Formación Profesional',
//                 'columnas' => ['Título', 'Institución', 'Año'],
//                 'filas' => $formprofesionals
//             ],
//             [
//                 'titulo' => 'Funciones Administrativas Académicas',
//                 'columnas' => ['Nombre', 'Institución', 'Año Inicio', 'Año Fin'],
//                 'filas' => $funcadminacads
//             ],
//             [
//                 'titulo' => 'Libros Publicados',
//                 'columnas' => ['Título', 'Editorial', 'Año'],
//                 'filas' => $libropublicados
//             ],
//             [
//                 'titulo' => 'Reconocimientos',
//                 'columnas' => ['Nombre', 'Institución', 'Año'],
//                 'filas' => $reconocimientos
//             ],
//             [
//                 'titulo' => 'Textos Publicados',
//                 'columnas' => ['Título', 'Editorial', 'Año'],
//                 'filas' => $textopublicados
//             ],
//             [
//                 'titulo' => 'Tutores y Tribunales',
//                 'columnas' => ['Nombre Tesis', 'Nivel Académico', 'Institución', 'Año'],
//                 'filas' => $tutortribunals
//             ],
//             [
//                 'titulo' => 'Trabajos y Proyectos de Investigación Concluidos',
//                 'columnas' => ['Título', 'Institución', 'Año'],
//                 'filas' => $trabproyinvconcluidos
//             ]
//         ];

//         return view('pdf_template', compact('datospersona', 'tablas'));
//     }
// }




// namespace App\Http\Controllers;

// use App\Models\DatosPersona;
// use App\Models\Articulogeneral;
// use App\Models\Articulorevista;
// use App\Models\Contacto;
// use App\Models\Expdocente;
// use App\Models\Expoconferencia;
// use App\Models\Expoevento;
// use App\Models\Exposeminario;
// use App\Models\Expprograrel;
// use App\Models\Formcurso;
// use App\Models\Formpostgrado;
// use App\Models\Formprofesional;
// use App\Models\Funcadminacad;
// use App\Models\Libropublicado;
// use App\Models\Reconocimiento;
// use App\Models\Textopublicado;
// use App\Models\Tutortribunal;
// use App\Models\Trabproyinvconcluido;
// use Illuminate\Http\Request;

// class PdfController extends Controller
// {
//     public function selectPersona(Request $request)
//     {
//         return view('select_persona');
//     }

//     public function generarPdf(Request $request)
//     {
//         $persona_id = $request->input('persona_id');

//         if (!$persona_id) {
//             return redirect()->back()->with('error', 'ID de persona no proporcionado.');
//         }

//         $datospersona = DatosPersona::find($persona_id);

//         if (!$datospersona) {
//             return redirect()->back()->with('error', 'Persona no encontrada');
//         }

//         $articulogenerals = Articulogeneral::where('datospersona_id', $persona_id)
//             ->get(['nombrearticulo', 'anio', 'organopublicacion', 'autor', 'coautor'])
//             ->toArray();

//         $articulorevistas = Articulorevista::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'revista', 'fecha_publicacion'])
//             ->toArray();

//         $contactos = Contacto::where('datospersona_id', $persona_id)
//             ->get(['tipo', 'detalle', 'preferencia'])
//             ->toArray();

//         $expdocentes = Expdocente::where('datospersona_id', $persona_id)
//             ->get(['institucion', 'nivel', 'asignatura', 'anio_inicio', 'anio_fin'])
//             ->toArray();

//         $expoconferencias = Expoconferencia::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'evento', 'lugar', 'anio'])
//             ->toArray();

//         $expoeventos = Expoevento::where('datospersona_id', $persona_id)
//             ->get(['nombre', 'tipo', 'lugar', 'anio'])
//             ->toArray();

//         $exposeminarios = Exposeminario::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'institucion', 'anio'])
//             ->toArray();

//         $expprograrels = Expprograrel::where('datospersona_id', $persona_id)
//             ->get(['programa', 'institucion', 'anio'])
//             ->toArray();

//         $formcursos = Formcurso::where('datospersona_id', $persona_id)
//             ->get(['nombre', 'institucion', 'anio'])
//             ->toArray();

//         $formpostgrados = Formpostgrado::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'institucion', 'anio'])
//             ->toArray();

//         $formprofesionals = Formprofesional::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'institucion', 'anio'])
//             ->toArray();

//         $funcadminacads = Funcadminacad::where('datospersona_id', $persona_id)
//             ->get(['nombre', 'institucion', 'anio_inicio', 'anio_fin'])
//             ->toArray();

//         $libropublicados = Libropublicado::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'editorial', 'anio'])
//             ->toArray();

//         $reconocimientos = Reconocimiento::where('datospersona_id', $persona_id)
//             ->get(['nombre', 'institucion', 'anio'])
//             ->toArray();

//         $textopublicados = Textopublicado::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'editorial', 'anio'])
//             ->toArray();

//         $tutortribunals = Tutortribunal::where('datospersona_id', $persona_id)
//             ->get(['nombre_tesis', 'nivel_academico', 'institucion', 'anio'])
//             ->toArray();

//         $trabproyinvconcluidos = Trabproyinvconcluido::where('datospersona_id', $persona_id)
//             ->get(['titulo', 'institucion', 'anio'])
//             ->toArray();

//         $tablas = [
//             [
//                 'titulo' => 'Artículos Generales',
//                 'columnas' => ['Nombre Artículo', 'Año', 'Órgano de Publicación', 'Autor', 'Coautor'],
//                 'filas' => $articulogenerals
//             ],
//             [
//                 'titulo' => 'Artículos en Revistas',
//                 'columnas' => ['Título', 'Revista', 'Fecha de Publicación'],
//                 'filas' => $articulorevistas
//             ],
//             [
//                 'titulo' => 'Contactos',
//                 'columnas' => ['Tipo', 'Detalle', 'Preferencia'],
//                 'filas' => $contactos
//             ],
//             [
//                 'titulo' => 'Experiencia Docente',
//                 'columnas' => ['Institución', 'Nivel', 'Asignatura', 'Año de Inicio', 'Año de Fin'],
//                 'filas' => $expdocentes
//             ],
//             [
//                 'titulo' => 'Experiencia en Conferencias',
//                 'columnas' => ['Título', 'Evento', 'Lugar', 'Año'],
//                 'filas' => $expoconferencias
//             ],
//             [
//                 'titulo' => 'Eventos Expositivos',
//                 'columnas' => ['Nombre', 'Tipo', 'Lugar', 'Año'],
//                 'filas' => $expoeventos
//             ],
//             [
//                 'titulo' => 'Seminarios Expositivos',
//                 'columnas' => ['Título', 'Institución', 'Año'],
//                 'filas' => $exposeminarios
//             ],
//             [
//                 'titulo' => 'Programas Relacionados',
//                 'columnas' => ['Programa', 'Institución', 'Año'],
//                 'filas' => $expprograrels
//             ],
//             [
//                 'titulo' => 'Formación en Cursos',
//                 'columnas' => ['Nombre', 'Institución', 'Año'],
//                 'filas' => $formcursos
//             ],
//             [
//                 'titulo' => 'Formación de Postgrados',
//                 'columnas' => ['Título', 'Institución', 'Año'],
//                 'filas' => $formpostgrados
//             ],
//             [
//                 'titulo' => 'Formación Profesional',
//                 'columnas' => ['Título', 'Institución', 'Año'],
//                 'filas' => $formprofesionals
//             ],
//             [
//                 'titulo' => 'Funciones Administrativas Académicas',
//                 'columnas' => ['Nombre', 'Institución', 'Año de Inicio', 'Año de Fin'],
//                 'filas' => $funcadminacads
//             ],
//             [
//                 'titulo' => 'Libros Publicados',
//                 'columnas' => ['Título', 'Editorial', 'Año'],
//                 'filas' => $libropublicados
//             ],
//             [
//                 'titulo' => 'Reconocimientos',
//                 'columnas' => ['Nombre', 'Institución', 'Año'],
//                 'filas' => $reconocimientos
//             ],
//             [
//                 'titulo' => 'Textos Publicados',
//                 'columnas' => ['Título', 'Editorial', 'Año'],
//                 'filas' => $textopublicados
//             ],
//             [
//                 'titulo' => 'Tutores y Tribunales',
//                 'columnas' => ['Nombre de Tesis', 'Nivel Académico', 'Institución', 'Año'],
//                 'filas' => $tutortribunals
//             ],
//             [
//                 'titulo' => 'Trabajos y Proyectos de Investigación Concluidos',
//                 'columnas' => ['Título', 'Institución', 'Año'],
//                 'filas' => $trabproyinvconcluidos
//             ]
//         ];

//         $pdf = \PDF::loadView('pdf_template', compact('datospersona', 'tablas'));

//         return $pdf->stream('DatosPersona.pdf');
//     }
// }


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosPersona;
use App\Models\Articulogeneral;
use App\Models\Articulorevista;
use App\Models\Contacto;
use App\Models\Expdocente;
use App\Models\Expoconferencia;
use App\Models\Expoevento;
use App\Models\Exposeminario;
use App\Models\Expprograrel;
use App\Models\Formcurso;
use App\Models\Formpostgrado;
use App\Models\Formprofesional;
use App\Models\Funcadminacad;
use App\Models\Libropublicado;
use App\Models\Reconocimiento;
use App\Models\Textopublicado;
use App\Models\Tutortribunal;
use App\Models\Trabproyinvconcluido;

class PdfController extends Controller
{
    public function selectPersona()
    {
        return view('select_persona');
    }

    public function generarHtml(Request $request)
    {
        $persona_id = $request->input('persona_id');

        $datospersona = DatosPersona::find($persona_id);
        if (!$datospersona) {
            return redirect()->back()->with('error', 'Persona no encontrada');
        }

        $articulogenerals = Articulogeneral::where('datospersona_id', $persona_id)
            ->get(['nombrearticulo', 'anio', 'organopublicacion', 'autor', 'coautor'])
            ->toArray();

        $articulorevistas = Articulorevista::where('datospersona_id', $persona_id)
            ->get(['titulo', 'revista', 'fecha_publicacion'])
            ->toArray();

        $contactos = Contacto::where('datospersona_id', $persona_id)
            ->get(['tipo', 'detalle', 'preferencia'])
            ->toArray();

        $expdocentes = Expdocente::where('datospersona_id', $persona_id)
            ->get(['institucion', 'nivel', 'asignatura', 'anio_inicio', 'anio_fin'])
            ->toArray();

        $expoconferencias = Expoconferencia::where('datospersona_id', $persona_id)
            ->get(['titulo', 'evento', 'lugar', 'anio'])
            ->toArray();

        $expoeventos = Expoevento::where('datospersona_id', $persona_id)
            ->get(['nombre', 'tipo', 'lugar', 'anio'])
            ->toArray();

        $exposeminarios = Exposeminario::where('datospersona_id', $persona_id)
            ->get(['titulo', 'institucion', 'anio'])
            ->toArray();

        $expprograrels = Expprograrel::where('datospersona_id', $persona_id)
            ->get(['programa', 'institucion', 'anio'])
            ->toArray();

        $formcursos = Formcurso::where('datospersona_id', $persona_id)
            ->get(['nombre', 'institucion', 'anio'])
            ->toArray();

        $formpostgrados = Formpostgrado::where('datospersona_id', $persona_id)
            ->get(['titulo', 'institucion', 'anio'])
            ->toArray();

        $formprofesionals = Formprofesional::where('datospersona_id', $persona_id)
            ->get(['titulo', 'institucion', 'anio'])
            ->toArray();

        $funcadminacads = Funcadminacad::where('datospersona_id', $persona_id)
            ->get(['nombre', 'institucion', 'anio_inicio', 'anio_fin'])
            ->toArray();

        $libropublicados = Libropublicado::where('datospersona_id', $persona_id)
            ->get(['titulo', 'editorial', 'anio'])
            ->toArray();

        $reconocimientos = Reconocimiento::where('datospersona_id', $persona_id)
            ->get(['nombre', 'institucion', 'anio'])
            ->toArray();

        $textopublicados = Textopublicado::where('datospersona_id', $persona_id)
            ->get(['titulo', 'editorial', 'anio'])
            ->toArray();

        $tutortribunals = Tutortribunal::where('datospersona_id', $persona_id)
            ->get(['nombre_tesis', 'nivel_academico', 'institucion', 'anio'])
            ->toArray();

        $trabproyinvconcluidos = Trabproyinvconcluido::where('datospersona_id', $persona_id)
            ->get(['titulo', 'institucion', 'anio'])
            ->toArray();

        $tablas = [
            [
                'titulo' => 'Artículos Generales',
                'columnas' => ['Nombre Artículo', 'Año', 'Órgano de Publicación', 'Autor', 'Coautor'],
                'filas' => $articulogenerals
            ],
            [
                'titulo' => 'Artículos en Revistas',
                'columnas' => ['Título', 'Revista', 'Fecha de Publicación'],
                'filas' => $articulorevistas
            ],
            [
                'titulo' => 'Contactos',
                'columnas' => ['Tipo', 'Detalle', 'Preferencia'],
                'filas' => $contactos
            ],
            [
                'titulo' => 'Experiencia Docente',
                'columnas' => ['Institución', 'Nivel', 'Asignatura', 'Año de Inicio', 'Año de Fin'],
                'filas' => $expdocentes
            ],
            [
                'titulo' => 'Experiencia en Conferencias',
                'columnas' => ['Título', 'Evento', 'Lugar', 'Año'],
                'filas' => $expoconferencias
            ],
            [
                'titulo' => 'Eventos Expositivos',
                'columnas' => ['Nombre', 'Tipo', 'Lugar', 'Año'],
                'filas' => $expoeventos
            ],
            [
                'titulo' => 'Seminarios Expositivos',
                'columnas' => ['Título', 'Institución', 'Año'],
                'filas' => $exposeminarios
            ],
            [
                'titulo' => 'Programas Relacionados',
                'columnas' => ['Programa', 'Institución', 'Año'],
                'filas' => $expprograrels
            ],
            [
                'titulo' => 'Formación en Cursos',
                'columnas' => ['Nombre', 'Institución', 'Año'],
                'filas' => $formcursos
            ],
            [
                'titulo' => 'Formación de Postgrados',
                'columnas' => ['Título', 'Institución', 'Año'],
                'filas' => $formpostgrados
            ],
            [
                'titulo' => 'Formación Profesional',
                'columnas' => ['Título', 'Institución', 'Año'],
                'filas' => $formprofesionals
            ],
            [
                'titulo' => 'Funciones Administrativas Académicas',
                'columnas' => ['Nombre', 'Institución', 'Año de Inicio', 'Año de Fin'],
                'filas' => $funcadminacads
            ],
            [
                'titulo' => 'Libros Publicados',
                'columnas' => ['Título', 'Editorial', 'Año'],
                'filas' => $libropublicados
            ],
            [
                'titulo' => 'Reconocimientos',
                'columnas' => ['Nombre', 'Institución', 'Año'],
                'filas' => $reconocimientos
            ],
            [
                'titulo' => 'Textos Publicados',
                'columnas' => ['Título', 'Editorial', 'Año'],
                'filas' => $textopublicados
            ],
            [
                'titulo' => 'Tutores y Tribunales',
                'columnas' => ['Nombre de Tesis', 'Nivel Académico', 'Institución', 'Año'],
                'filas' => $tutortribunals
            ],
            [
                'titulo' => 'Trabajos y Proyectos de Investigación Concluidos',
                'columnas' => ['Título', 'Institución', 'Año'],
                'filas' => $trabproyinvconcluidos
            ]
        ];

        return view('html_template', compact('datospersona', 'tablas'));
    }
}

