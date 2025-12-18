<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tasks')->delete();
        
        \DB::table('tasks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => 'Wat kan jij doen om huisspinnen te helpen overleven?',
                'assignment' => NULL,
                'created_at' => '2025-12-16 16:28:32.000',
                'updated_at' => '2025-12-16 16:28:34.000',
            ),
            1 => 
            array (
                'id' => 2,
                'question' => NULL,
                'assignment' => '
Maak een foto van een bloeiend deel van je gazon met paardenbloemen.',
                'created_at' => '2025-12-16 16:28:35.000',
                'updated_at' => '2025-12-16 16:28:36.000',
            ),
            2 => 
            array (
                'id' => 3,
                'question' => 'Wat kan jij doen om madeliefjes te beschermen?',
                'assignment' => NULL,
                'created_at' => '2025-12-17 13:57:15.000',
                'updated_at' => '2025-12-17 13:57:30.000',
            ),
            3 => 
            array (
                'id' => 4,
                'question' => NULL,
                'assignment' => 'Hang een vogelhuisje op en maak een foto van het vogelhuisje in je tuin.',
                'created_at' => '2025-12-17 13:57:16.000',
                'updated_at' => '2025-12-17 13:57:30.000',
            ),
            4 => 
            array (
                'id' => 5,
                'question' => 'Hoe kan je bijdragen aan het behoud van koolmezen in je buurt?',
                'assignment' => NULL,
                'created_at' => '2025-12-17 13:57:16.000',
                'updated_at' => '2025-12-17 13:57:30.000',
            ),
            5 => 
            array (
                'id' => 6,
                'question' => NULL,
                'assignment' => 'Maak een foto van een klein deel van de tuin met brandnetels waar vlinders op zitten.',
                'created_at' => '2025-12-17 13:57:16.000',
                'updated_at' => '2025-12-17 13:57:31.000',
            ),
            6 => 
            array (
                'id' => 7,
                'question' => 'Hoe kun je de witte klaver beschermen?',
                'assignment' => NULL,
                'created_at' => '2025-12-17 13:57:16.000',
                'updated_at' => '2025-12-17 13:57:31.000',
            ),
            7 => 
            array (
                'id' => 8,
                'question' => NULL,
                'assignment' => 'Maak een foto van een groen plein of park waar duiven veilig rondlopen.',
                'created_at' => '2025-12-17 13:57:17.000',
                'updated_at' => '2025-12-17 13:57:31.000',
            ),
            8 => 
            array (
                'id' => 9,
                'question' => 'Wat helpt padden overleven in jouw omgeving?',
                'assignment' => NULL,
                'created_at' => '2025-12-17 13:57:17.000',
                'updated_at' => '2025-12-17 13:57:31.000',
            ),
            9 => 
            array (
                'id' => 10,
                'question' => NULL,
                'assignment' => 'Maak een foto van een muur waar muurplanten groeien.',
                'created_at' => '2025-12-17 13:57:17.000',
                'updated_at' => '2025-12-17 13:57:32.000',
            ),
            10 => 
            array (
                'id' => 11,
                'question' => 'Wat helpt het herderstasje overleven?',
                'assignment' => NULL,
                'created_at' => '2025-12-17 13:57:18.000',
                'updated_at' => '2025-12-17 13:57:32.000',
            ),
            11 => 
            array (
                'id' => 12,
                'question' => NULL,
                'assignment' => 'Maak een foto van een composthoek of vochtige hoek waar slakken leven.',
                'created_at' => '2025-12-17 13:57:18.000',
                'updated_at' => '2025-12-17 13:57:32.000',
            ),
            12 => 
            array (
                'id' => 13,
                'question' => 'Hoe kun je oorwormen ondersteunen in de tuin?',
                'assignment' => NULL,
                'created_at' => '2025-12-17 13:57:19.000',
                'updated_at' => '2025-12-17 13:57:33.000',
            ),
            13 => 
            array (
                'id' => 14,
                'question' => NULL,
                'assignment' => 'Maak een foto van gras of mos in kieren of stoepranden.',
                'created_at' => '2025-12-17 13:57:19.000',
                'updated_at' => '2025-12-17 13:57:33.000',
            ),
            14 => 
            array (
                'id' => 15,
                'question' => 'Hoe help je kleefkruid en vogels?',
                'assignment' => NULL,
                'created_at' => '2025-12-17 13:57:19.000',
                'updated_at' => '2025-12-17 13:57:33.000',
            ),
            15 => 
            array (
                'id' => 16,
                'question' => NULL,
                'assignment' => 'Maak een foto van een veldje of tuin met wilde bloemen of kruiden.',
                'created_at' => '2025-12-17 13:57:20.000',
                'updated_at' => '2025-12-17 13:57:33.000',
            ),
            16 => 
            array (
                'id' => 17,
                'question' => 'Hoe kun je wespen helpen zonder jezelf te prikken?',
                'assignment' => NULL,
                'created_at' => '2025-12-17 13:57:20.000',
                'updated_at' => '2025-12-17 13:57:34.000',
            ),
            17 => 
            array (
                'id' => 18,
                'question' => NULL,
                'assignment' => 'Maak een foto van een berm of stoepkier waar weegbree groeit.',
                'created_at' => '2025-12-17 13:57:20.000',
                'updated_at' => '2025-12-17 13:57:34.000',
            ),
            18 => 
            array (
                'id' => 19,
                'question' => 'Hoe kun je boterbloemen ondersteunen?',
                'assignment' => NULL,
                'created_at' => '2025-12-17 13:57:21.000',
                'updated_at' => '2025-12-17 13:57:34.000',
            ),
            19 => 
            array (
                'id' => 20,
                'question' => NULL,
                'assignment' => 'Maak een foto van een stukje tuin of groene hoek waar mieren vrij kunnen leven.',
                'created_at' => '2025-12-17 13:57:21.000',
                'updated_at' => '2025-12-17 13:57:35.000',
            ),
            20 => 
            array (
                'id' => 21,
                'question' => 'Hoe kun je regenwormen in je tuin helpen?',
                'assignment' => NULL,
                'created_at' => '2025-12-17 13:57:21.000',
                'updated_at' => '2025-12-17 13:57:35.000',
            ),
            21 => 
            array (
                'id' => 22,
                'question' => NULL,
                'assignment' => 'Maak een foto van mos dat groeit op stoep, muur of tegel.',
                'created_at' => '2025-12-17 13:57:21.000',
                'updated_at' => '2025-12-17 13:57:35.000',
            ),
            22 => 
            array (
                'id' => 23,
                'question' => 'Hoe kun je fluitenkruid ondersteunen?',
                'assignment' => NULL,
                'created_at' => '2025-12-17 13:57:22.000',
                'updated_at' => '2025-12-17 13:57:36.000',
            ),
            23 => 
            array (
                'id' => 24,
                'question' => NULL,
                'assignment' => 'Maak een foto van een goed gescheiden composthoop of biologisch afval.',
                'created_at' => '2025-12-17 13:57:22.000',
                'updated_at' => '2025-12-17 13:57:36.000',
            ),
            24 => 
            array (
                'id' => 25,
                'question' => 'Hoe kun je een gezonde balans in huis behouden?',
                'assignment' => NULL,
                'created_at' => '2025-12-17 13:57:22.000',
                'updated_at' => '2025-12-17 13:57:36.000',
            ),
            25 => 
            array (
                'id' => 26,
                'question' => NULL,
                'assignment' => 'Maak een foto van zuring die groeit in tuin of berm.',
                'created_at' => '2025-12-17 13:57:23.000',
                'updated_at' => '2025-12-17 13:57:38.000',
            ),
            26 => 
            array (
                'id' => 27,
                'question' => 'Wat helpt duivenkervel overleven?',
                'assignment' => NULL,
                'created_at' => '2025-12-17 13:57:23.000',
                'updated_at' => '2025-12-17 13:57:38.000',
            ),
            27 => 
            array (
                'id' => 28,
                'question' => NULL,
                'assignment' => 'Maak een foto van een kunstnest of open dak waar gierzwaluwen kunnen nestelen.',
                'created_at' => '2025-12-17 13:57:25.000',
                'updated_at' => '2025-12-17 13:57:38.000',
            ),
            28 => 
            array (
                'id' => 29,
                'question' => 'Hoe help je egels veilig overleven in de stad?',
                'assignment' => NULL,
                'created_at' => '2025-12-17 13:57:26.000',
                'updated_at' => '2025-12-17 13:57:38.000',
            ),
            29 => 
            array (
                'id' => 30,
                'question' => NULL,
                'assignment' => 'Maak een foto van een braakliggend stuk of wilde tuin waar akkerwinde groeit.',
                'created_at' => '2025-12-17 13:57:26.000',
                'updated_at' => '2025-12-17 13:57:39.000',
            ),
        ));
        
        
    }
}