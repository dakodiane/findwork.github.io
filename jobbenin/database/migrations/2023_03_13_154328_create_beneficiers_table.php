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
        Schema::create('beneficiers', function (Blueprint $table) {
            $table->unsignedBigInteger('idpostulant');
            $table->foreign('idpostulant')->references('id')->on('postulants');

            $table->unsignedBigInteger('ref');
            $table->foreign('ref')->references('id')->on('offres');
            
            $table->primary(array('idpostulant', 'ref'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiers');
    }
};
