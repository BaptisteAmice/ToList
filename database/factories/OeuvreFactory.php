<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OeuvreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => 'Terraria',
            'image' => '',
            'image_ratio' => '',
            'media' => 'Jeux',
            'sous_media' => 'Jeux vidéo',
            'status' => 'En cours',
            'resume' => 'Terraria est un jeu vidéo',
            'date_sortie' => null,
            'date_sortie_fin' => null,
            'nom_unite' => 'Boss',
            'nombre_unite_mineure' => null,
            'duree_unite_mineure' => null,
            'nombre_unite_majeure' => null,
            'duree_unite_majeure' => null,

        ];
    }
}
