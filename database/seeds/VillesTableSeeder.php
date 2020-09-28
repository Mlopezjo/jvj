<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('villes')->insert([
            [
                'id' => 1,
                'zip' => 25400,
                'name' => 'audincourt',
            ],
            [
                'id' => 2,
                'zip' => 25400,
                'name' => 'exincourt',
            ],
            [
                'id' => 3,
                'zip' => 25400,
                'name' => 'arbouans',
            ],
            [
                'id' => 4,
                'zip' => 25400,
                'name' => 'Taillecourt',
            ],
            [
                'id' => 5,
                'zip' => 25000,
                'name' => 'besançon',
            ],
            [
                'id' => 6,
                'zip' => 25200,
                'name' => 'montbéliard',
            ],
            [
                'id' => 7,
                'zip' => 25200,
                'name' => 'grand-charmont',
            ],
            [
                'id' => 8,
                'zip' => 25200,
                'name' => 'bethoncourt',
            ],
            [
                'id' => 9,
                'zip' => 25230,
                'name' => 'seloncourt',
            ],
            [
                'id' => 10,
                'zip' => 25600,
                'name' => 'sochaux',
            ],
            [
                'id' => 11,
                'zip' => 25460,
                'name' => 'etupe',
            ],
            [
                'id' => 12,
                'zip' => 25630,
                'name' => 'saint-suzanne',
            ],
        ]);
    }
}
