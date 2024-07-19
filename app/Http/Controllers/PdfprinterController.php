<?php

namespace App\Http\Controllers;

use App\Models\Datospersona;
use App\Models\Pdfprinter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PdfprinterRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PdfprinterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pdfprinters = Pdfprinter::paginate();

        return view('pdfprinter.index', compact('pdfprinters'))
            ->with('i', ($request->input('page', 1) - 1) * $pdfprinters->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pdfprinter = new Pdfprinter();

        return view('pdfprinter.create', compact('pdfprinter'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PdfprinterRequest $request): RedirectResponse
    {
        Pdfprinter::create($request->validated());

        return Redirect::route('pdfprinters.index')
            ->with('success', 'Pdfprinter created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $pdfprinter = Pdfprinter::find($id);
        $persona = Datospersona::with([
            'Articulogeneral',
            'Articulorevista',
            'Contacto',
            'Datospersonb',
            'Expdocente',
            'Expoconferencia',
            'Expoevento',
            'Exposeminario',
            'Exposervicio',
            'Expprograrel',
            'Formcurso',
            'Formpostgrado',
            'Formprofesional',
            'Funcadminacad',
            'Libropublicado',
            'Reconocimiento',
            'Textopublicado',
            'Trabproyinvconcluido',
            'Tutortribunal',
        ])->findOrFail($id);
        return view('pdfprinter.show', compact('pdfprinter', 'persona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pdfprinter = Pdfprinter::find($id);

        return view('pdfprinter.edit', compact('pdfprinter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PdfprinterRequest $request, Pdfprinter $pdfprinter): RedirectResponse
    {
        $pdfprinter->update($request->validated());

        return Redirect::route('pdfprinters.index')
            ->with('success', 'Pdfprinter updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Pdfprinter::find($id)->delete();

        return Redirect::route('pdfprinters.index')
            ->with('success', 'Pdfprinter deleted successfully');
    }
}
