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
        Schema::create('contacters', function (Blueprint $table) {
            $table->unsignedBigInteger('idrecruteur');
            $table->foreign('idrecruteur')->references('id')->on('recruteurs');

            $table->unsignedBigInteger('idfreelancer');
            $table->foreign('idfreelancer')->references('id')->on('freelancers');
            
            $table->primary(array('idrecruteur', 'idfreelancer'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacters');
    }
};
