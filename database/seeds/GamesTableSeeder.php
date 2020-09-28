<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'id' => 1,
                'title' => 'Super Mario Bros',
                'image' => null,
                'sortie' => '1993-09-13 00:00:00',
                'genre_id' => 4,
                'editeur_id' => 2,
                'dev_id' => 2,
                'platform_id' => 8,
                'status' => 2,
            ],
            [
                'id' => 2,
                'title' => 'God Of War 4',
                'image' => null,
                'sortie' => '2018-04-20 00:00:00',
                'genre_id' => 2,
                'editeur_id' => 53,
                'dev_id' => 8,
                'platform_id' => 4,
                'status' => 2,
            ],
            [
                'id' => 3,
                'title' => 'The Legend of Zelda : Breath of the wild',
                'image' => null,
                'sortie' => '2018-04-20 00:00:00',
                'genre_id' => 0,
                'editeur_id' => 0,
                'dev_id' => 0,
                'platform_id' => 21,
                'status' => 1,
            ],
        ]);
    }
}
