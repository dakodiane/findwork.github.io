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
        Schema::create('recruters', function (Blueprint $table) {
            $table->unsignedBigInteger('idrecruteur');
            $table->foreign('idrecruteur')->references('id')->on('recruteurs');

            $table->unsignedBigInteger('idpostulant');
            $table->foreign('idpostulant')->references('id')->on('postulants');
            
            $table->primary(array('idrecruteur', 'idpostulant'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruters');
    }
};
