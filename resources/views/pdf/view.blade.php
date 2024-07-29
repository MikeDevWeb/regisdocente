@extends('adminlte::page')
@section('content')
<!-- resources/views/pdf/view.blade.php -->
    <div class="card mx-auto float-left">
        <div class="card-header text-center">
            <title>Generar PDF</title>
            <button onclick="generatePDF()">Descargar PDF</button>
        </div>
    </div>

@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
    function generatePDF() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        const datospersona = @json($datospersona);

        // Añadir los datos de la datospersona
        doc.setFontSize(12);
        doc.text(`Nombre: ${datospersona.nombre}`, 10, 10);
        doc.text(`Apellido Paterno: ${datospersona.apellidoPaterno}`, 10, 20);
        doc.text(`Apellido Materno: ${datospersona.apellidoMaterno}`, 10, 30);

        let startY = 30;

        // Función para añadir tablas
        function addTableData(tableName, tableData, startY) {
            doc.text(`${tableName}:`, 10, startY);
            startY += 10;
            tableData.forEach((item, index) => {
                const itemText = Object.entries(item).map(([key, value]) => `${key}: ${value}`).join(', ');
                doc.text(`${index + 1}. ${itemText}`, 10, startY);
                startY += 10;
            });
            return startY + 10;
        }

        // Añadir datos de las tablas asociadas
        startY = addTableData('Artículos Generales', datospersona.articulogeneral, startY);
        startY = addTableData('Artículos de Revistas', datospersona.articulorevista, startY);
        startY = addTableData('Contactos', datospersona.contacto, startY);
        startY = addTableData('Datos datospersonales', datospersona.datospersonb, startY);
        startY = addTableData('Experiencia Docente', datospersona.expdocente, startY);
        startY = addTableData('Exposición en Conferencias', datospersona.expoconferencia, startY);
        startY = addTableData('Exposición en Eventos', datospersona.expoevento, startY);
        startY = addTableData('Exposición en Seminarios', datospersona.exposeminario, startY);
        startY = addTableData('Programas Relacionados', datospersona.expprograrel, startY);
        startY = addTableData('Formación en Cursos', datospersona.formcurso, startY);
        startY = addTableData('Formación en Postgrados', datospersona.formpostgrado, startY);
        startY = addTableData('Formación Profesional', datospersona.formprofesional, startY);
        startY = addTableData('Funciones Administrativas Académicas', datospersona.funcadminacad, startY);
        startY = addTableData('Libros Publicados', datospersona.libropublicado, startY);
        startY = addTableData('Reconocimientos', datospersona.reconocimiento, startY);
        startY = addTableData('Textos Publicados', datospersona.textopublicado, startY);
        startY = addTableData('Tutorías y Tribunales', datospersona.tutortribunal, startY);
        startY = addTableData('Trabajos y Proyectos de Investigación Concluidos', datospersona.trabproyinvconcluido, startY);
        // Guarda el PDF
        const nombre = datospersona.nombre;
        const apellidoPaterno = datospersona.apellidoPaterno;
        const apellidoMaterno = datospersona.apellidoMaterno;
        const fileName = `${nombre} ${apellidoPaterno} ${apellidoMaterno}.pdf`;
        doc.save(fileName);
    }
</script>
