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
        //
        Schema::create('Citas', function (Blueprint $table) {
            $table->id('IdCita');
            $table->unsignedBigInteger('IdEstudiantes');
            $table->unsignedBigInteger('IdCoach');
            $table->string('Duracion', 250);
            $table->string('Estado', 250);
            $table->Date('FechaHoraInicio');
            $table->Date('FechaHoraFin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Citas');
    }
};
