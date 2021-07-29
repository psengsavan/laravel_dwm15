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
                'author' => 'Pratchett',
                'publication_year' => 2000,
                'genre' => 'Fantasy burlesque',
                'synopsis' => "Un terre plate sur le dos de 4 éléphants sur le dos d'une tortue"
            ],
            [
                'title' => "L'épée de vérité",
                'author' => 'Terry Goodkind',
                'publication_year' => 2005,
                'genre' => 'Fantasy',
                'synopsis' => "L'histoire d'un forestier avec son épée"
            ],
            [
                'title' => 'A la croisée des mondes',
                'author' => 'Pullman',
                'publication_year' => 1995,
                'genre' => 'Enfant',
                'synopsis' => "Les aventures de Lyra et Pan"
            ]
        ]);
    }
}
