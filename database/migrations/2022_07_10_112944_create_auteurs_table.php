<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auteurs', function (Blueprint $table) {
            $table->id();

            $table->string('nom')->nullable();
            $table->string('prenoms')->nullable();
            $table->string('nom_natif')->nullable();
            $table->string('pseudonyme')->nullable();


            $table->date('genre')->nullable();
            $table->date('nationalite')->nullable();
            $table->date('naissance')->nullable();
            $table->date('mort')->nullable();

            $table->mediumText('description')->nullable();


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
        Schema::dropIfExists('auteurs');
    }
}
