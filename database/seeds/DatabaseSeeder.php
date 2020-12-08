<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(projetTableSeeder::class);
        $this->call(ProjetsTableSeeder::class);
        $this->call(imageTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        
    }
}
