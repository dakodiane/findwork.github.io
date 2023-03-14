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
        Schema::create('postulants', function (Blueprint $table) {
            $table->id();
            $table->string('nomP');
            $table->string('prenomP');
            $table->string('emailP');
            $table->string('mdpP');
            $table->integer('telephoneP');
            $table->string('adresseP');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulants');
    }
};
