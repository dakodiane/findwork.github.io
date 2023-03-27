<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //


        Schema::create('offres', function (Blueprint $table,) {


            $table->id();
            $table->date('datdebut');
            $table->date('datfin');
            $table->string('detail');
            $table->string('poste');
            $table->string('secteurO');
            $table->integer('salaireO');
            $table->string('diplome');
            $table->string('competenceO');
            $table->string('typeO');
            $table->foreignId('id_user');
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
            ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
