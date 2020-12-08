<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class imageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->delete();
        
        DB::table('images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'projet_id' => 1,
                'lien' => "horloge.png",
                
            ),
            1 => 
            array (
                'id' => 2,
                'projet_id' => 1,
                'lien' => "horloge.gif",
            ),
            2 => 
            array (
                'id' => 3,
                'projet_id' => 2,
                'lien' => "clippy.png",
                
            ),
            3 => 
            array (
                'id' => 4,
                'projet_id' => 2,
                'lien' => "clippy.gif",
                
            ),
        ));
    
    }
}
