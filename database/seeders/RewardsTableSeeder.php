<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RewardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rewards')->delete();
        
        \DB::table('rewards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => 'Token om de streak een dag te missen.',
                'created_at' => '2025-12-17 13:23:30.000',
                'updated_at' => '2025-12-17 13:23:32.000',
            ),
            1 => 
            array (
                'id' => 2,
                'description' => 'Je naam komt op de website van natuurmonumenten.',
                'created_at' => '2025-12-17 13:23:31.000',
                'updated_at' => '2025-12-17 13:23:32.000',
            ),
            2 => 
            array (
                'id' => 3,
                'description' => 'Ontvang een digitaal wandelboekje.',
                'created_at' => '2025-12-17 13:23:35.000',
                'updated_at' => '2025-12-17 13:23:33.000',
            ),
            3 => 
            array (
                'id' => 4,
                'description' => 'Je kan gratis parkeren bij een natuurgebied.',
                'created_at' => '2025-12-17 13:23:35.000',
                'updated_at' => '2025-12-17 13:23:33.000',
            ),
            4 => 
            array (
                'id' => 5,
                'description' => 'Ontvang een beloning van bezoekerscentra.',
                'created_at' => '2025-12-17 13:23:36.000',
                'updated_at' => '2025-12-17 13:23:33.000',
            ),
            5 => 
            array (
                'id' => 6,
                'description' => 'Er wordt een boom in jouw naam geplant door natuurmonumenten.',
                'created_at' => '2025-12-17 13:23:36.000',
                'updated_at' => '2025-12-17 13:23:34.000',
            ),
        ));
        
        
    }
}