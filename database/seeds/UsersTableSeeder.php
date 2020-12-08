<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Emmanuel Malan',
                'email' => 'emmanuelmalan225@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hRmRO7UbXyhQcMxvvfvbru/m.h75g9X9bdkVATODfQUvnbqxepFfi',
                'remember_token' => NULL,
                'created_at' => '2020-07-19 15:06:41',
                'updated_at' => '2020-07-19 15:06:41',
            ),
        ));
        
        
    }
}