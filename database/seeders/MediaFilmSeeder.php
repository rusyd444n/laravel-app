<?php

namespace Database\Seeders;

use App\Models\MediaFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'megah di terima',
            'url_media' => 'https://www.youtube.com/watch?v=FLGr_22nUmQ',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'kuning',
            'url_media' => 'https://www.youtube.com/watch?v=rIw54m6OIjA',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'rayakan pemenang',
            'url_media' => 'https://www.youtube.com/watch?v=y08Bj6yba7w',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'senjakala cerita',
            'url_media' => 'https://www.youtube.com/watch?v=lwxaayIYWfw',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'binar wajah sebaya',
            'url_media' => 'https://www.youtube.com/watch?v=rEDQXyxa2mk',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'konservatif',
            'url_media' => 'https://www.youtube.com/watch?v=fFaxZCN3cn0',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'timur',
            'url_media' => 'https://www.youtube.com/watch?v=cCoDqaj_pWs',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Gelap malam',
            'url_media' => 'https://www.youtube.com/watch?v=KJuOpEti6GE',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'masa masa',
            'url_media' => 'https://www.youtube.com/watch?v=IMDn0YqV2NI',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'pelantur',
            'url_media' => 'https://www.youtube.com/watch?v=5r7hxJ9NBVU',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Sedih memandang mimpi',
            'url_media' => 'https://www.youtube.com/embed/ZmNgMSn-SW4?si=LPNgRQkoaxybAPFz',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Bertaruh pada api',
            'url_media' => 'https://www.youtube.com/embed/fjAFcewRl64?si=XRBaaKkE5H67CUeL',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Sepenggal sadar',
            'url_media' => 'https://www.youtube.com/embed/XmXJGhMIr98?si=nmch4aiuCdlT4EEn',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => '7 hari menuju semesta',
            'url_media' => 'https://www.youtube.com/embed/rsUyw-L0bCQ?si=9O_d8rBYDPKSvQS5',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Poto',
            'url_media' => 'https://jeurnals.com/storage/2023/02/3.jpeg',
        ]);
    }
}