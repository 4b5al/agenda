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
        Schema::create('consulta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->constrained('paciente');
            $table->foreignId('consulta_id')->constrained('consulta');
            $table->foreignId('medico_id')->constrained('medico');
            $table->foreignId('especialidade_id')->constrained('especialidades');
            $table->date('data');
            $table->time('hora');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consulta');
    }
};
