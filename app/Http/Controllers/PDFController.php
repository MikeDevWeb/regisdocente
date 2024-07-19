<?php

namespace App\Http\Controllers;

use FPDF;
use App\Models\Datospersona;
use App\Models\Articulogeneral;
use App\Models\Articulorevista;
use App\Models\Contacto;
use App\Models\Datospersonb;
use App\Models\Expdocente;
use App\Models\Expoconferencia;
use App\Models\Expoevento;
use App\Models\Exposeminario;
use App\Models\Expprograrel;
use App\Models\Formcurso;
use App\Models\Formpostgrado;
use App\Models\Funcadminacad;
use App\Models\Libropublicado;
use App\Models\Reconocimiento;
use App\Models\Textopublicado;
use App\Models\Trabproyinvconcluido;
use App\Models\Tutortribunal;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        // Evitar cualquier salida previa
        ob_clean();

        // Crear una instancia de FPDF
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('DejaVuSans', '', 12); // Usa la fuente personalizada

        // Título del documento
        $pdf->Cell(0, 10, 'Reporte de Datos Personales', 0, 1, 'C');
        $pdf->Ln(10); // Espacio en blanco

        // Obtener el registro específico de datospersona por ID
        $persona = Datospersona::find($id);

        if (!$persona) {
            $pdf->Cell(0, 10, 'No se encontró el registro.', 0, 1, 'C');
            $pdf->Output();
            exit;
        }

        // Mostrar los datos de datospersona excluyendo los campos no deseados
        $excludedFields = ['created_at', 'updated_at', 'fecharegistro', 'id', 'user_id'];
        foreach ($persona->toArray() as $column => $value) {
            if (!in_array($column, $excludedFields) && !is_array($value)) {
                $pdf->Cell(40, 10, "$column: $value", 0, 1);
            }
        }

        $pdf->Ln(10); // Espacio en blanco entre secciones

        // Función para mostrar datos relacionados de manera similar
        $this->addRelatedDataToPDF($pdf, $persona);

        // Salida del PDF
        $pdf->Output();
        exit;
    }

    private function addRelatedDataToPDF(FPDF $pdf, $persona)
    {
        // Definir los modelos y sus relaciones
        $models = [
            'Articulogeneral' => $persona->articulogenerals,
            'Articulorevista' => $persona->articulorevistas,
            'Contacto' => $persona->contactos,
            'Datospersonb' => $persona->datospersonbs,
            'Expdocente' => $persona->expdocentes,
            'Expoconferencia' => $persona->expoconferencias,
            'Expoevento' => $persona->expoeventos,
            'Exposeminario' => $persona->exposeminarios,
            'Expprograrel' => $persona->expprograrels,
            'Formcurso' => $persona->formcursos,
            'Formpostgrado' => $persona->formpostgrados,
            'Funcadminacad' => $persona->funcadminacads,
            'Libropublicado' => $persona->libropublicados,
            'Reconocimiento' => $persona->reconocimientos,
            'Textopublicado' => $persona->textopublicados,
            'Trabproyinvconcluido' => $persona->trabproyinvconcluidos,
            'Tutortribunal' => $persona->tutortribunals,
        ];

        foreach ($models as $modelName => $records) {
            if ($records instanceof \Illuminate\Support\Collection && $records->count()) {
                $pdf->SetFont('DejaVuSans', 'B', 12);
                $pdf->Cell(0, 10, $modelName . ' Datos', 0, 1, 'L');
                $pdf->SetFont('DejaVuSans', '', 10);

                foreach ($records as $record) {
                    foreach ($record->toArray() as $column => $value) {
                        if (!in_array($column, ['created_at', 'updated_at', 'fecharegistro', 'id', 'user_id']) && !is_array($value)) {
                            $pdf->Cell(40, 10, "$column: $value", 0, 1);
                        }
                    }
                    $pdf->Ln(5); // Espacio en blanco entre registros
                }
            }
            $pdf->Ln(10); // Espacio en blanco entre modelos
        }
    }
}



// class PDFController extends Controller
// {
//     public function generatePDF($nombre, $apellidoPaterno, $apellidoMaterno)
//     {
//         // Evitar cualquier salida previa
//         ob_clean();

//         // Crear una instancia de FPDF
//         $pdf = new FPDF();
//         $pdf->AddPage();
//         $pdf->SetFont('DejaVuSans', '', 12); // Usa la fuente personalizada

//         // Título del documento
//         $pdf->Cell(0, 10, 'Reporte de Datos Personales', 0, 1, 'C');
//         $pdf->Ln(10); // Espacio en blanco

//         // Obtener el registro específico de datospersona
//         $persona = Datospersona::where('nombre', $nombre)
//                                 ->where('apellidoPaterno', $apellidoPaterno)
//                                 ->where('apellidoMaterno', $apellidoMaterno)
//                                 ->first();

//         if (!$persona) {
//             $pdf->Cell(0, 10, 'No se encontró el registro.', 0, 1, 'C');
//             $pdf->Output();
//             exit;
//         }

//         // Mostrar los datos de datospersona excluyendo los campos no deseados
//         $excludedFields = ['created_at', 'updated_at', 'fecharegistro', 'id', 'user_id'];
//         foreach ($persona->toArray() as $column => $value) {
//             if (!in_array($column, $excludedFields) && !is_array($value)) {
//                 $pdf->Cell(40, 10, "$column: $value", 0, 1);
//             }
//         }

//         $pdf->Ln(10); // Espacio en blanco entre secciones

//         // Función para mostrar datos relacionados de manera similar
//         $this->addRelatedDataToPDF($pdf, $persona);

//         // Salida del PDF
//         $pdf->Output();
//         exit;
//     }

//     private function addRelatedDataToPDF(FPDF $pdf, $persona)
//     {
//         // Definir los modelos y sus relaciones
//         $models = [
//             'Articulogeneral' => $persona->articulogenerals,
//             'Articulorevista' => $persona->articulorevistas,
//             'Contacto' => $persona->contactos,
//             'Datospersonb' => $persona->datospersonbs,
//             'Expdocente' => $persona->expdocentes,
//             'Expoconferencia' => $persona->expoconferencias,
//             'Expoevento' => $persona->expoeventos,
//             'Exposeminario' => $persona->exposeminarios,
//             'Expprograrel' => $persona->expprograrels,
//             'Formcurso' => $persona->formcursos,
//             'Formpostgrado' => $persona->formpostgrados,
//             'Funcadminacad' => $persona->funcadminacads,
//             'Libropublicado' => $persona->libropublicados,
//             'Reconocimiento' => $persona->reconocimientos,
//             'Textopublicado' => $persona->textopublicados,
//             'Trabproyinvconcluido' => $persona->trabproyinvconcluidos,
//             'Tutortribunal' => $persona->tutortribunals,
//         ];

//         foreach ($models as $modelName => $records) {
//             if ($records instanceof \Illuminate\Support\Collection && $records->count()) {
//                 $pdf->SetFont('DejaVuSans', 'B', 12);
//                 $pdf->Cell(0, 10, $modelName . ' Datos', 0, 1, 'L');
//                 $pdf->SetFont('DejaVuSans', '', 10);

//                 foreach ($records as $record) {
//                     foreach ($record->toArray() as $column => $value) {
//                         if (!in_array($column, ['created_at', 'updated_at', 'fecharegistro', 'id', 'user_id']) && !is_array($value)) {
//                             $pdf->Cell(40, 10, "$column: $value", 0, 1);
//                         }
//                     }
//                     $pdf->Ln(5); // Espacio en blanco entre registros
//                 }
//             }
//             $pdf->Ln(10); // Espacio en blanco entre modelos
//         }
//     }
// }

// tercero
// class PDFController extends Controller
// {
//     public function generatePDF()
//     {
//         // Evitar cualquier salida previa
//         ob_clean();

//         // Crear una instancia de FPDF
//         $pdf = new FPDF();
//         $pdf->AddPage();
//         $pdf->SetFont('DejaVuSans', '', 12); // Usa la fuente personalizada

//         // Título del documento
//         $pdf->Cell(0, 10, 'Reporte Completo de Datos', 0, 1, 'C');
//         $pdf->Ln(10); // Espacio en blanco

//         // Definir los modelos y sus relaciones
//         $models = [
//             'Datospersona' => Datospersona::class,
//             'Articulogeneral' => Articulogeneral::class,
//             'Articulorevista' => Articulorevista::class,
//             'Contacto' => Contacto::class,
//             'Datospersonb' => Datospersonb::class,
//             'Expdocente' => Expdocente::class,
//             'Expoconferencia' => Expoconferencia::class,
//             'Expoevento' => Expoevento::class,
//             'Exposeminario' => Exposeminario::class,
//             'Expprograrel' => Expprograrel::class,
//             'Formcurso' => Formcurso::class,
//             'Formpostgrado' => Formpostgrado::class,
//             'Funcadminacad' => Funcadminacad::class,
//             'Libropublicado' => Libropublicado::class,
//             'Reconocimiento' => Reconocimiento::class,
//             'Textopublicado' => Textopublicado::class,
//             'Trabproyinvconcluido' => Trabproyinvconcluido::class,
//             'Tutortribunal' => Tutortribunal::class,
//         ];

//         foreach ($models as $modelName => $modelClass) {
//             // Obtener todos los registros del modelo actual
//             $records = $modelClass::all();

//             $pdf->SetFont('DejaVuSans', 'B', 12);
//             $pdf->Cell(0, 10, "{$modelName} Datos", 0, 1, 'L');
//             $pdf->SetFont('DejaVuSans', '', 10);

//             foreach ($records as $record) {
//                 // Mostrar los datos del registro
//                 foreach ($record->toArray() as $column => $value) {
//                     if (!is_array($value)) {
//                         $pdf->Cell(40, 10, "$column: $value", 0, 1);
//                     }
//                 }
//                 $pdf->Ln(5); // Espacio en blanco entre registros
//             }

//             $pdf->Ln(10); // Espacio en blanco entre modelos
//             $pdf->AddPage();
//         }

//         // Salida del PDF
//         $pdf->Output();
//         exit;
//     }
// }


// namespace App\Http\Controllers;

// use FPDF;
// use App\Models\Datospersona;


// namespace App\Http\Controllers;

// use FPDF;
// use App\Models\Articulogeneral;
// use App\Models\Articulorevista;
// use App\Models\Contacto;
// use App\Models\Datospersona;
// use App\Models\Datospersonb;
// use App\Models\Expdocente;
// use App\Models\Expoconferencia;
// use App\Models\Expoevento;
// use App\Models\Exposeminario;
// use App\Models\Expprograrel;
// use App\Models\Formcurso;
// use App\Models\Formpostgrado;
// use App\Models\Funcadminacad;
// use App\Models\Libropublicado;
// use App\Models\Reconocimiento;
// use App\Models\Textopublicado;
// use App\Models\Trabproyinvconcluido;
// use App\Models\Tutortribunal;

// class PDFController extends Controller
// {
//     public function generatePDF()
//     {
//         // Evitar cualquier salida previa
//         ob_clean();

//         // Crear una instancia de FPDF
//         $pdf = new FPDF();
//         $pdf->AddPage();
//         $pdf->SetFont('Arial', 'B', 12);

//         // Título del documento
//         $pdf->Cell(0, 10, 'Reporte de Datos Personales y Relaciones', 0, 1, 'C');
//         $pdf->Ln(10); // Espacio en blanco

//         // Obtener todos los registros de datospersona con sus relaciones
//         $personas = Datospersona::with(['articulogenerals', 'comments', 'orders'])->get();

//         foreach ($personas as $persona) {
//             $pdf->SetFont('Arial', 'B', 10);
//             $pdf->Cell(0, 10, 'ID: ' . $persona->id, 0, 1, 'L');
//             $pdf->SetFont('Arial', '', 10);

//             // Mostrar los datos de datospersona
//             foreach ($persona->toArray() as $column => $value) {
//                 if (!is_array($value)) {
//                     $pdf->Cell(40, 10, "$column: $value", 0, 1);
//                 }
//             }
//             $pdf->Ln(5); // Espacio en blanco entre registros

//             // Mostrar datos relacionados de Articulogenerals
//             $articulogenerals = $persona->articulogenerals;
//             if ($articulogenerals instanceof \Illuminate\Support\Collection && $articulogenerals->count()) {
//                 $pdf->SetFont('Arial', 'B', 10);
//                 $pdf->Cell(0, 10, 'Artículos Generales:', 0, 1, 'L');
//                 $pdf->SetFont('Arial', '', 10);

//                 foreach ($articulogenerals as $articulo) {
//                     foreach ($articulo->toArray() as $column => $value) {
//                         $pdf->Cell(40, 10, "$column: $value", 0, 1);
//                     }
//                     $pdf->Ln(5); // Espacio en blanco entre registros
//                 }
//             }

//             // Mostrar datos relacionados de articulorevistas
//             $articulorevistas = $persona->articulorevistas;
//             if ($articulorevistas instanceof \Illuminate\Support\Collection && $articulorevistas->count()) {
//                 $pdf->SetFont('Arial', 'B', 10);
//                 $pdf->Cell(0, 10, 'Artículo de revistas:', 0, 1, 'L');
//                 $pdf->SetFont('Arial', '', 10);

//                 foreach ($articulorevistas as $articulorevista) {
//                     foreach ($articulorevista->toArray() as $column => $value) {
//                         $pdf->Cell(40, 10, "$column: $value", 0, 1);
//                     }
//                     $pdf->Ln(5); // Espacio en blanco entre registros
//                 }
//             }
//             // Mostrar datos relacionados de contactos
//             $contactos = $persona->contactos;
//             if ($contactos instanceof \Illuminate\Support\Collection && $contactos->count()) {
//                 $pdf->SetFont('Arial', 'B', 10);
//                 $pdf->Cell(0, 10, 'Contacto:', 0, 1, 'L');
//                 $pdf->SetFont('Arial', '', 10);

//                 foreach ($contactos as $contacto) {
//                     foreach ($contacto->toArray() as $column => $value) {
//                         $pdf->Cell(40, 10, "$column: $value", 0, 1);
//                     }
//                     $pdf->Ln(5); // Espacio en blanco entre registros
//                 }
//             }

//             // Añadir nueva página para cada persona
//             $pdf->AddPage();
//         }

//         // Salida del PDF
//         $pdf->Output();
//         exit;
//     }
// }


// namespace App\Http\Controllers;

// use FPDF;
// use App\Models\Articulogeneral;
// use App\Models\Articulorevista;
// use App\Models\Contacto;
// use App\Models\Datospersona;
// use App\Models\Datospersonb;
// use App\Models\Expdocente;
// use App\Models\Expoconferencia;
// use App\Models\Expoevento;
// use App\Models\Exposeminario;
// use App\Models\Expprograrel;
// use App\Models\Formcurso;
// use App\Models\Formpostgrado;
// use App\Models\Funcadminacad;
// use App\Models\Libropublicado;
// use App\Models\Reconocimiento;
// use App\Models\Textopublicado;
// use App\Models\Trabproyinvconcluido;
// use App\Models\Tutortribunal;

// class PDFController extends Controller
// {
//     public function generatePDF()
//     {
//         ob_clean();
//         // Crear una instancia de FPDF
//         $pdf = new FPDF();
//         $pdf->AddPage();
//         $pdf->SetFont('Arial', 'B', 12);

//         $pdf->Cell(0, 10, 'Reporte de Tablas', 0, 1, 'C');
//         $pdf->Ln(10); // Espacio en blanco

//         // Ejemplo de como recorrer y agregar los datos de las tablas
//         $tables = [
//             'Articulogenerals' => Articulogeneral::all(),
//             'Articulorevistas' => Articulorevista::all(),
//             'Contactos' => Contacto::all(),
//             'Datospersonas' => Datospersona::all(),
//             'Datospersonbs' => Datospersonb::all(),
//             'Expdocentes' => Expdocente::all(),
//             'Expoconferencias' => Expoconferencia::all(),
//             'Expoeventos' => Expoevento::all(),
//             'Exposeminarios' => Exposeminario::all(),
//             'Expprograrels' => Expprograrel::all(),
//             'Formcursos' => Formcurso::all(),
//             'Formpostgrados' => Formpostgrado::all(),
//             'Funcadminacads' => Funcadminacad::all(),
//             'Libropublicados' => Libropublicado::all(),
//             'Reconocimientos' => Reconocimiento::all(),
//             'Textopublicados' => Textopublicado::all(),
//             'Trabproyinvconcluidos' => Trabproyinvconcluido::all(),
//             'Tutortribunals' => Tutortribunal::all(),
//         ];

//         foreach ($tables as $tableName => $records) {
//             $pdf->SetFont('Arial', 'B', 10);
//             $pdf->Cell(0, 10, $tableName, 0, 1, 'L');
//             $pdf->SetFont('Arial', '', 10);

//             foreach ($records as $record) {
//                 foreach ($record->toArray() as $column => $value) {
//                     $pdf->Cell(40, 10, "$column: $value", 0, 1);
//                 }
//                 $pdf->Ln(5); // Espacio en blanco entre registros
//             }
//             $pdf->AddPage(); // Añadir nueva página para cada tabla
//         }

//         // Salida del PDF
//         $pdf->Output();
//         exit;
//     }
// }
