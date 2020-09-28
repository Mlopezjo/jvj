<?php

use Illuminate\Database\Seeder;

class SocietesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('societes')->insert([
            [
                'id' => 1,
                'name' => 'A DEFINIR',
            ],
            [
                'id' => 2,
                'name' => 'Atari, Inc. / Atari Corporation',
            ],
            [
                'id' => 3,
                'name' => 'Nintendo',
            ],
            [
                'id' => 4,
                'name' => 'Bandai',
            ],
            [
                'id' => 5,
                'name' => 'Commodore',
            ],
            [
                'id' => 6,
                'name' => 'Amstrad',
            ],
            [
                'id' => 7,
                'name' => 'Sega',
            ],
            [
                'id' => 8,
                'name' => 'Sony',
            ],
            [
                'id' => 9,
                'name' => 'Capcom',
            ],
            [
                'id' => 10,
                'name' => 'Microsoft',
            ],
            [//Editeurs
                'id' => 11,
                'name' => '07th Expansion',
            ],
            [
                'id' => 12,
                'name' => '11 bit studios',
            ],
            [
                'id' => 14,
                'name' => '1C Company',
            ],
            [
                'id' => 15,
                'name' => '2K Games',
            ],
            [
                'id' => 16,
                'name' => '2K Play',
            ],
            [
                'id' => 17,
                'name' => '2K Sports',
            ],
            [
                'id' => 18,
                'name' => '21st Century Entertainment',
            ],
            [
                'id' => 19,
                'name' => '3D Realms',
            ],
            [
                'id' => 20,
                'name' => 'The 3DO Company',
            ],
            [
                'id' => 21,
                'name' => '505 Games',
            ],
            [
                'id' => 22,
                'name' => '5pb.',
            ],
            [
                'id' => 23,
                'name' => '7th Level',
            ],
            [
                'id' => 24,
                'name' => '989 Studios',
            ],
            [
                'id' => 25,
                'name' => 'Aackosoft',
            ],
            [
                'id' => 26,
                'name' => 'ABC Software',
            ],
            [
                'id' => 27,
                'name' => 'Absolute Entertainment',
            ],
            [
                'id' => 28,
                'name' => 'Access Software',
            ],
            [
                'id' => 29,
                'name' => 'Acclaim Entertainment',
            ],
            [
                'id' => 30,
                'name' => 'Accolade',
            ],
            [
                'id' => 31,
                'name' => 'Acornsoft',
            ],
            [
                'id' => 32,
                'name' => 'Acquire',
            ],
            [
                'id' => 33,
                'name' => 'Active Gaming Media',
            ],
            [
                'id' => 34,
                'name' => 'Activision',
            ],
            [
                'id' => 35,
                'name' => 'Activision Blizzard',
            ],
            [
                'id' => 36,
                'name' => 'Addictive Games',
            ],
            [
                'id' => 37,
                'name' => 'ADK',
            ],
            [
                'id' => 38,
                'name' => 'Adult Swim Games',
            ],
            [
                'id' => 39,
                'name' => 'The Adventure Company',
            ],
            [
                'id' => 40,
                'name' => 'Adventure International',
            ],
            [
                'id' => 41,
                'name' => 'Adventure Soft',
            ],
            [
                'id' => 42,
                'name' => 'Aeria Games',
            ],
            [
                'id' => 43,
                'name' => 'Affect',
            ],
            [
                'id' => 44,
                'name' => 'Ageod',
            ],
            [
                'id' => 45,
                'name' => 'Agetec',
            ],
            [
                'id' => 46,
                'name' => 'Akella',
            ],
            [
                'id' => 47,
                'name' => 'Aksys',
            ],
            [
                'id' => 48,
                'name' => 'Alawar',
            ],
            [
                'id' => 49,
                'name' => 'Alchemist',
            ],
            [
                'id' => 50,
                'name' => 'AliceSoft',
            ],
            [
                'id' => 51,
                'name' => 'Ubisoft',
            ],
            [
                'id' => 52,
                'name' => 'Square Enix',
            ],
            [
                'id' => 53,
                'name' => 'SIE Santa Monica Studio',
            ],
            [
                'id' => 54,
                'name' => 'Xbox Game Studios',
            ],
        ]);
    }
}
