<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'id' => 1,
                'name' => 'A DEFINIR',
            ],
            [
                'id' => 2,
                'name' => 'action',
            ],
            [
                'id' => 3,
                'name' => 'aventure',
            ],
            [
                'id' => 4,
                'name' => 'course',
            ],
            [
                'id' => 5,
                'name' => 'plate-forme',
            ],
            [
                'id' => 6,
                'name' => 'simulation',
            ],
            [
                'id' => 7,
                'name' => 'jeux de societé',
            ],
            [
                'id' => 8,
                'name' => 'combat',
            ],
            [
                'id' => 9,
                'name' => 'stratégie',
            ],
            [
                'id' => 10,
                'name' => 'RPG',
            ],
            [
                'id' => 11,
                'name' => 'FPS',
            ],
            [
                'id' => 12,
                'name' => 'Musical',
            ],
            [
                'id' => 13,
                'name' => 'indépendant',
            ],
        ]);
    }
}
