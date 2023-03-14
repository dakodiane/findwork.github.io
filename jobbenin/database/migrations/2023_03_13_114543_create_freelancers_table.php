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
        Schema::create('freelancers', function (Blueprint $table) {
            $table->id();
            $table->string('nomF');
            $table->string('prenomF');
            $table->string('emailF');
            $table->string('mdpF');
            $table->integer('telephoneF');
            $table->string('secteurF');
            $table->string('adresseF');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancers');
    }
};
