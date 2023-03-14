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
        Schema::create('recruteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nomR');
            $table->string('secteurR');
            $table->string('villeR');
            $table->string('adresseR');
             $table->string('description');
            $table->string('email');
            $table->string('mdpR');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruteurs');
    }
};
