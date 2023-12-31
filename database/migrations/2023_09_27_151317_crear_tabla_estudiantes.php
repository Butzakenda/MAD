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
        Schema::create('Estudiantes', function (Blueprint $table) {
            $table->id('IdEstudiantes');
            $table->unsignedBigInteger('user_id');
            $table->string('Nombres', 50);
            $table->string('Apellidos', 50);
            $table->string('CorreoELectronico', 50);
            $table->string('Sexo', 20);
            $table->string('Lenguaje', 50);
            $table->string('PreferenciasEducativas', 50);
            $table->string('Carrera', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Estudiantes');
    }
};
