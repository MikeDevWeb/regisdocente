<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosPersona;
use Fpdf\Fpdf;

class PdfController extends Controller
{
    public function generatePDF($id)
    {
        $datospersona = DatosPersona::with([
            'articulogenerals',
            'articulorevistas',
            'contactos',
            'datospersonbs',
            'expdocentes',
            'expoconferencias',
            'expoeventos',
            'exposeminarios',
            'expprograrels',
            'formcursos',
            'formpostgrados',
            'formprofesionals',
            'funcadminacads',
            'libropublicados',
            'reconocimientos',
            'textopublicados',
            'trabproyinvconcluidos',
            'tutortribunals'
        ])->find($id);

        if (!$datospersona) {
            abort(404, 'Datos persona no encontrados');
        }

        $pdf = new \Fpdf\Fpdf();
        $pdf->AddPage();
        $pdf->SetFont('DejaVuSansCondensed', 'B', 16);
        $pdf->Cell(40, 10, 'Datos de ' . $datospersona->nombre . ' ' . $datospersona->apellidoPaterno);

        $this->addSection($pdf, 'Artículos Generales', $datospersona->articulogenerals);
        $this->addSection($pdf, 'Artículos de Revistas', $datospersona->articulorevistas);
        $this->addSection($pdf, 'Contactos', $datospersona->contactos);
        $this->addSection($pdf, 'Datos Personales B', $datospersona->datospersonbs);
        $this->addSection($pdf, 'Experiencia Docente', $datospersona->expdocentes);
        $this->addSection($pdf, 'Conferencias', $datospersona->expoconferencias);
        $this->addSection($pdf, 'Eventos', $datospersona->expoeventos);
        $this->addSection($pdf, 'Seminarios', $datospersona->exposeminarios);
        $this->addSection($pdf, 'Programas Relacionados', $datospersona->expprograrels);
        $this->addSection($pdf, 'Cursos', $datospersona->formcursos);
        $this->addSection($pdf, 'Postgrados', $datospersona->formpostgrados);
        $this->addSection($pdf, 'Formación Profesional', $datospersona->formprofesionals);
        $this->addSection($pdf, 'Funciones Administrativas Académicas', $datospersona->funcadminacads);
        $this->addSection($pdf, 'Libros Publicados', $datospersona->libropublicados);
        $this->addSection($pdf, 'Reconocimientos', $datospersona->reconocimientos);
        $this->addSection($pdf, 'Textos Publicados', $datospersona->textopublicados);
        $this->addSection($pdf, 'Trabajos y Proyectos de Investigación Concluidos', $datospersona->trabproyinvconcluidos);
        $this->addSection($pdf, 'Tutorías y Tribunales', $datospersona->tutortribunals);

        $pdf->Output('D', 'documento.pdf');
        exit;
    }

    private function addSection($pdf= new Fpdf, $title, $items)
    {
        $pdf->SetFont('DejaVuSansCondensed', 'B', 12);
        $pdf->Ln(10);
        $pdf->Cell(40, 10, $title);
        $pdf->SetFont('DejaVuSansCondensed', '', 12);

        if ($items->isEmpty()) {
            $pdf->Ln(10);
            $pdf->Cell(40, 10, 'No hay ' . strtolower($title) . '.');
        } else {
            foreach ($items as $item) {
                $pdf->Ln(10);
                $pdf->Cell(40, 10, $item->titulo ?? $item->nombre ?? 'Sin título');
            }
        }
    }
}




//FUNCIONA EL DE ABAJO
// namespace App\Http\Controllers;

// use FPDF;
// use App\Models\Datospersona;
// use Illuminate\Http\Request;

// class PDFController extends Controller
// {
//     public function generatePDF($id)
//     {
//         // Evitar cualquier salida previa
//         ob_clean();

//         // Crear una instancia de FPDF
//         $pdf = new FPDF();
//         $pdf->AddPage();

//         // Agregar la fuente personalizada
//         $pdf->AddFont('DejaVuSans', '', 'DejaVuSans.php');
//         $pdf->SetFont('DejaVuSans', '', 12); // Usa la fuente personalizada

//         // Título del documento
//         $pdf->Cell(0, 10, 'Reporte de Datos Personales', 0, 1, 'C');
//         $pdf->Ln(10); // Espacio en blanco

//         // Obtener el registro específico de datospersona por ID con las relaciones cargadas
//         $persona = Datospersona::with([
//             'articulogenerals',
//             'articulorevistas',
//             'contactos',
//             'datospersonbs',
//             'expdocentes',
//             'expoconferencias',
//             'expoeventos',
//             'exposeminarios',
//             'expprograrels',
//             'formcursos',
//             'formpostgrados',
//             'funcadminacads',
//             'libropublicados',
//             'reconocimientos',
//             'textopublicados',
//             'trabproyinvconcluidos',
//             'tutortribunals'
//         ])->find($id);

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
//             'Articulogenerals' => $persona->articulogenerals,
//             'Articulorevistas' => $persona->articulorevistas,
//             'Contactos' => $persona->contactos,
//             'Datospersonbs' => $persona->datospersonbs,
//             'Expdocentes' => $persona->expdocentes,
//             'Expoconferencias' => $persona->expoconferencias,
//             'Expoeventos' => $persona->expoeventos,
//             'Exposeminarios' => $persona->exposeminarios,
//             'Expprograrels' => $persona->expprograrels,
//             'Formcursos' => $persona->formcursos,
//             'Formpostgrados' => $persona->formpostgrados,
//             'Funcadminacads' => $persona->funcadminacads,
//             'Libropublicados' => $persona->libropublicados,
//             'Reconocimientos' => $persona->reconocimientos,
//             'Textopublicados' => $persona->textopublicados,
//             'Trabproyinvconcluidos' => $persona->trabproyinvconcluidos,
//             'Tutortribunals' => $persona->tutortribunals,
//         ];

//         foreach ($models as $modelName => $records) {
//             if ($records->isNotEmpty()) {
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
