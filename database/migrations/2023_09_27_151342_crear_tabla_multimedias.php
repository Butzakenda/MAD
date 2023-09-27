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
        Schema::create('Multimedias', function (Blueprint $table) {
            $table->id('IdMultimedia');
            $table->unsignedBigInteger('IdRecomendaciones');
            $table->unsignedBigInteger('IdAdministrador');
            $table->string('Nombres', 50);
            $table->string('Descripcion', 250);
            $table->string('Tipo', 250);
            $table->string('Idioma', 250);
            $table->string('Estado', 250);
            $table->string('Duracion', 250)->nullable();
            $table->string('Lenguaje', 250)->nullable();
            $table->string('Tecnologia', 250)->nullable();
            $table->string('Precio', 250)->nullable();
            $table->string('Certificado', 250)->nullable();
            $table->string('Imagen', 250)->nullable();
            $table->string('Video', 250)->nullable();
            $table->date('FechaInicio')->nullable();
            $table->date('FechaFin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Multimedias');
    }
};
