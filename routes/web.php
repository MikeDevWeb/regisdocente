<?php

use App\Http\Controllers\ArticulogeneralController;
use App\Http\Controllers\ArticulorevistaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PdfprinterController;
// use App\Mail\HelloMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatospersonaController;
use App\Http\Controllers\DatospersonbController;
use App\Http\Controllers\ExpdocenteController;
use App\Http\Controllers\ExpoconferenciaController;
use App\Http\Controllers\ExpoeventoController;
use App\Http\Controllers\ExposeminarioController;
use App\Http\Controllers\ExpprograrelController;
use App\Http\Controllers\FormcursoController;
use App\Http\Controllers\FormpostgradoController;
use App\Http\Controllers\FormprofesionalController;
use App\Http\Controllers\FuncadminacadController;
use App\Http\Controllers\LibropublicadoController;
use App\Http\Controllers\TextopublicadoController;
use App\Http\Controllers\TutortribunalController;
use Illuminate\Http\Request; // Importa la clase Request
use App\Http\Controllers\TrabproyinvconcluidoController;
use App\Http\Controllers\ReconocimientoController;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PdfController;
use App\Models\Datospersona;


// Route::get('/', function () {

// Mail::to('miguel.vertis@esam.edu.bo')->send(new HelloMail());
// });


Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('articulogenerals', ArticulogeneralController::class);
Route::resource('articulorevistas', ArticulorevistaController::class);
Route::resource('contactos', ContactoController::class);
Route::resource('datospersonas', DatospersonaController::class);
Route::resource('datospersonbs', DatospersonbController::class);
Route::resource('expdocentes', ExpdocenteController::class);
Route::resource('expoconferencias', ExpoconferenciaController::class);
Route::resource('expoeventos', ExpoeventoController::class);
Route::resource('exposeminarios', ExposeminarioController::class);
Route::resource('expprograrels', ExpprograrelController::class);
Route::resource('formcursos', FormcursoController::class);
Route::resource('formpostgrados', FormpostgradoController::class);
Route::resource('formprofesionals', FormprofesionalController::class);
Route::resource('funcadminacads', FuncadminacadController::class);
Route::resource('libropublicados', LibropublicadoController::class);
Route::resource('reconocimientos', ReconocimientoController::class);
Route::resource('textopublicados', TextopublicadoController::class);
Route::resource('tutortribunals', TutortribunalController::class);
Route::resource('trabproyinvconcluidos', TrabproyinvconcluidoController::class);

// Route::get('/select-persona', [PdfController::class, 'selectPersona'])->name('select_persona');
// Route::post('/generar-html', [PdfController::class, 'generarHtml'])->name('generar_html');

Route::get('/select-persona', [PdfController::class, 'selectPersona'])->name('select_persona');
Route::post('/generar-html', [PdfController::class, 'generarHtml'])->name('generar_html');




// FUNCIONA EL DE ABAJO
// Route::get('/generate-pdf-form', function() {
//     $personas = Datospersona::all();
//     return view('pdf_form', compact('personas'));
// });

// Route::get('/generate-pdf/{id}', [PDFController::class, 'generatePDF'])->name('generate-pdf');
