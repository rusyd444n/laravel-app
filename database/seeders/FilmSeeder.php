<?php

namespace Database\Seeders;

use App\models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::insert([
            'judul' => 'MORFEM',
            'deskripsi' => 'Lorem ipmsum....'
        ]);
        Film::insert([
            'judul' => 'The adams',
            'deskripsi' => 'Lorem ipmsum....'
        ]);
        Film::insert([
            'judul' => 'Dongker',
            'deskripsi' => 'Lorem ipmsum....'
        ]);
    }
}