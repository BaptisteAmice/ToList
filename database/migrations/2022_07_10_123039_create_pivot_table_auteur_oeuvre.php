<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableAuteurOeuvre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auteur_oeuvre', function (Blueprint $table) {
            $table->id();
            $table->foreignId('oeuvre_id')->constrained()->onDelete('cascade');
            $table->foreignId('auteur_id')->constrained()->onDelete('cascade');


            $table->string('role')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_table_oeuvre_auteur');
    }
}
