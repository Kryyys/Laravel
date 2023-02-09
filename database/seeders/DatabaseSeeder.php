<?php

namespace Database\Seeders;
use App\Models\Jeu;
use App\Models\Categorie;
use App\Models\Tag;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Jeu::factory(15)->create();

        Categorie::factory(10)->create();

        Tag::factory(15)->create();
    }
}
