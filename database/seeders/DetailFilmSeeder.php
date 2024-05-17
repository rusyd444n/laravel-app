<?php

namespace Database\Seeders;

use App\models\DetailFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailFilm::insert([
            'film_id' => 1,
            'code_film' => 'tt23289160',
            'url_imdb' => 'https://www.imdb.com/title/tt12637874/?ref_=hm_fanfav_tt_i_1_pd_fp1_r'
        ]);
        DetailFilm::insert([
            'film_id' => 2,
            'code_film' => 'tt2788316',
            'url_imdb' => 'https://www.imdb.com/title/tt4154664/?ref_=nv_sr_srsg_3_tt_6_nm_2_q_marvel'
        ]);
        DetailFilm::insert([
            'film_id' => 3,
            'code_film' => 'tt13016388',
            'url_imdb' => 'https://www.imdb.com/title/tt13016388/?ref_=tt_sims_tt_i_4'
        ]);
    }
}