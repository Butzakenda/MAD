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
        Schema::create('Noticias', function (Blueprint $table) {
            $table->id('IdNoticia');
            $table->unsignedBigInteger('IdAdministrador');
            $table->string('Titulo', 250);
            $table->string('Descripcion', 250);
            $table->Date('Fecha', 250);
            $table->string('Imagen', 250);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Noticias');
    }
};
