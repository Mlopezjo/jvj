<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'role_id' => 1,
                'ville_id' => null,
                'name' => 'Admin Istrateur',
                'email' => 'admin@jvj.test',
                'password' => '$2y$10$BJT.qq8HHVPxuLMIEkRxN.fqVtq61U3y5xcB2LhwahDIlVol1K62K',
                'image' => 'null',
            ],
            [
                'id' => 2,
                'role_id' => 2,
                'ville_id' => null,
                'name' => 'Util Isateur',
                'email' => 'util@jvj.test',
                'password' => '$2y$10$BJT.qq8HHVPxuLMIEkRxN.fqVtq61U3y5xcB2LhwahDIlVol1K62K',
                'image' => null,
            ]
        ]);
    }
}
