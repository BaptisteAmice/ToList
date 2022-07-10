<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOeuvresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oeuvres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('image')->default('');
            $table->string('image_ratio')->default('');

            $table->enum('media', ['Littérature', 'Cinéma', 'Jeux', 'Musique']);
            $table->string('sous_media')->nullable();

            $table->string('status')->enum(['À venir','En cours', 'Terminé']);
            $table->mediumText('resume');
            $table->date('date_sortie')->nullable();
            $table->date('date_sortie_fin')->nullable();

            $table->enum('nom_unite', ['Tome','Chapitre', 'Episode','Niveau','Boss', 'Titre','Album'])->nullable();
            $table->integer('nombre_unite_mineure')->nullable();
            $table->integer('duree_unite_mineure')->nullable();
            $table->integer('nombre_unite_majeure')->nullable();
            $table->integer('duree_unite_majeure')->nullable();

            $table->timestamps();

            //ajout par liaison à d'autres tables :
            /*
            titres alternatifs -> titres_alternatifs(titre_alternatif,id_oeuvre)
            auteurs -> auteurs() -> auteurs_oeuvres(id_auteur,id_oeuvre,role)
            genres -> genres(id,intitule) -> genre_oeuvres(id_genre,id_oeuvre)
            note,favoris,completion -> utilisateur_oeuvre(id_oeuvre,id_utilisateur,score,favoris,completion[A commencer,En cours,Terminé,En attente, Abandonné, Infini])
            oeuvres liees -> oeuvres_liees(id_oeuvre,id_oeuvre_liee,lien[prequel/sequel,spin-off/parent,adaptation/original])
            commentaires -> commentaires(id_oeuvre,id_utilisateur,commentaire,date)
            series -> series(id,intitule) -> series_oeuvres(id_serie,id_oeuvre)
            sous type serait peut etre plutot une tbale à part ??
            signalements????

            */



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oeuvres');
    }
}
