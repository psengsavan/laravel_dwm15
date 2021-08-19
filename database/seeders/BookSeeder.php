<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'La huitième couleur',
                'author_id' => 1,
                'publication_year' => 2000,
                'synopsis' => "Un terre plate sur le dos de 4 éléphants sur le dos d'une tortue"
            ],
            [
                'title' => "L'épée de vérité",
                'author_id' => 2,
                'publication_year' => 2005,
                'synopsis' => "L'histoire d'un forestier avec son épée"
            ],
            [
                'title' => 'A la croisée des mondes',
                'author_id' => 4,
                'publication_year' => 1995,
                'synopsis' => "Les aventures de Lyra et Pan"
            ]
        ]);
    }
}
