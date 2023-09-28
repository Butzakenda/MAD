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
        Schema::create('Coaches', function (Blueprint $table) {
            $table->id('IdCoach');
            $table->unsignedBigInteger('user_id');
            $table->string('Nombres', 50);
            $table->string('Apellidos', 50);
            $table->string('CorreoELectronico', 50);
            $table->string('Sexo', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Coaches');
    }
};
