<?php

use Illuminate\Database\Seeder;

class PlateformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plateforms')->insert([
            [
                'id' => 1,
                'name' => 'PlayStation',
                'societe_id' => '56',
            ],
            [
                'id' => 2,
                'name' => 'PlayStation 2',
                'societe_id' => '56',
            ],
            [
                'id' => 3,
                'name' => 'PlayStation 3',
                'societe_id' => 56,
            ],
            [
                'id' => 4,
                'name' => 'PlayStation 4',
                'societe_id' => 56,
            ],
            [
                'id' => 5,
                'name' => 'Xbox',
                'societe_id' => 56,
            ],
            [
                'id' => 6,
                'name' => 'Xbox 360',
                'societe_id' => 56,
            ],
            [
                'id' => 7,
                'name' => 'Xbox One',
                'societe_id' => 56,
            ],
            [
                'id' => 8,
                'name' => 'NES',
                'societe_id' => 11,
            ],
            [
                'id' => 9,
                'name' => 'Super NES',
                'societe_id' => 11,
            ],
            [
                'id' => 10,
                'name' => 'Game Boy',
                'societe_id' => 11,
            ],
            [
                'id' => 11,
                'name' => 'Game Boy Color',
                'societe_id' => 11,
            ],
            [
                'id' => 12,
                'name' => 'Game Boy Advance',
                'societe_id' => 11,
            ],
            [
                'id' => 13,
                'name' => 'Game Boy Pocket',
                'societe_id' => 11,
            ],
            [
                'id' => 14,
                'name' => 'Game Boy Light',
                'societe_id' => 11,
            ],
            [
                'id' => 15,
                'name' => 'Game Boy Advance SP',
                'societe_id' => 11,
            ],
            [
                'id' => 16,
                'name' => 'Game Boy Micro',
                'societe_id' => 11,
            ],
            [
                'id' => 17,
                'name' => 'Nintendo 64',
                'societe_id' => 11,
            ],
            [
                'id' => 18,
                'name' => 'GameCube',
                'societe_id' => 11,
            ],
            [
                'id' => 19,
                'name' => 'Wii',
                'societe_id' => 11,
            ],
            [
                'id' => 20,
                'name' => 'Wii U',
                'societe_id' => 11,
            ],
            [
                'id' => 21,
                'name' => 'Nintendo Switch',
                'societe_id' => 11,
            ],
            [
                'id' => 22,
                'name' => 'Nintendo DS',
                'societe_id' => 11,
            ],
            [
                'id' => 23,
                'name' => 'Nintendo DS Lite',
                'societe_id' => 11,
            ],
            [
                'id' => 24,
                'name' => 'Nintendo DSI',
                'societe_id' => 11,
            ],
            [
                'id' => 25,
                'name' => 'Nintendo DSI XL',
                'societe_id' => 11,
            ],
            [
                'id' => 26,
                'name' => 'Nintendo 3DS',
                'societe_id' => 11,
            ],
            [
                'id' => 27,
                'name' => 'Nintendo Switch Lite',
                'societe_id' => 11,
            ],
        ]);
    }
}
