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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->date('datdebut');
            $table->date('datfin');
            $table->string('detail');
            $table->string('poste');
            $table->string('secteurO');
           
            $table->foreignId('id_recruteur');
            $table->foreign('id_recruteur')
                ->references('id')
                ->on('recruteurs')
            ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};
