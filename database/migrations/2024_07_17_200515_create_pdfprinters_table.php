<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pdfprinters', function (Blueprint $table) {
            $table->id();

            $table->foreignId('articulogeneral_id')->constrained()->onDelete('cascade');
            $table->foreignId('articulorevista_id')->constrained()->onDelete('cascade');
            $table->foreignId('contacto_id')->constrained()->onDelete('cascade');
            $table->foreignId('datospersona_id')->constrained()->onDelete('cascade');
            $table->foreignId('datospersonb_id')->constrained()->onDelete('cascade');
            $table->foreignId('expdocente_id')->constrained()->onDelete('cascade');
            $table->foreignId('expoconferencia_id')->constrained()->onDelete('cascade');
            $table->foreignId('expoevento_id')->constrained()->onDelete('cascade');
            $table->foreignId('exposeminario_id')->constrained()->onDelete('cascade');
            $table->foreignId('expprograrel_id')->constrained()->onDelete('cascade');
            $table->foreignId('formcurso_id')->constrained()->onDelete('cascade');
            $table->foreignId('formpostgrado_id')->constrained()->onDelete('cascade');
            $table->foreignId('formprofesional_id')->constrained()->onDelete('cascade');
            $table->foreignId('funcadminacad_id')->constrained()->onDelete('cascade');
            $table->foreignId('libropublicado_id')->constrained()->onDelete('cascade');
            $table->foreignId('reconocimiento_id')->constrained()->onDelete('cascade');
            $table->foreignId('textopublicado_id')->constrained()->onDelete('cascade');
            $table->foreignId('trabproyinvconcluido_id')->constrained()->onDelete('cascade');
            $table->foreignId('tutortribunal_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdfprinters');
    }
};
