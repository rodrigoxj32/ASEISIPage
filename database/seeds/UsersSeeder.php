<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ASEISI',
            'email' => 'aseisi@outlook.es',
            'password'=> bcrypt('aseisi'),
            'rol_id' => 1,
        ]);
    }
}


