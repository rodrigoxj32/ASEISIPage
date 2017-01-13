<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(RolSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(DocumentosSeeder::class);
        // $this->call('UserTableSeeder');

        
    }
}
