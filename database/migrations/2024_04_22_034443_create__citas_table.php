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
        Schema::create('_citas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id');
            $table->unsignedBigInteger('medico_id');
            $table->date('fecha_cita');
            $table->time('hora_cita');
            $table->text('motivo_consulta')->nullable();
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('paciente_id')->references('id')->on('_pacientes');
            $table->foreign('medico_id')->references('id')->on('_medicos');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_citas');
    }
};
