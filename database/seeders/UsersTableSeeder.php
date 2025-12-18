<?php

namespace Database\Seeders;

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
                'name' => 'Milan',
                'email' => 'milan@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$pqqAkJwX4wjPWv9ABRYxDe5Sq7snY4dCxH9Je0S4Avxveztl7rVvi',
                'remember_token' => NULL,
                'role' => 1,
                'streak_counter' => 0,
                'created_at' => '2025-12-16 15:27:28',
                'updated_at' => '2025-12-18 16:10:11',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'test',
                'email' => 'test@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$gbtj7iJYDCsxPqX1IVLCF.ii7Tx6CbL7lah7nuubJbJSAOd4wK7yC',
                'remember_token' => NULL,
                'role' => 1,
                'streak_counter' => 0,
                'created_at' => '2025-12-18 14:45:20',
                'updated_at' => '2025-12-18 14:45:20',
            ),
        ));
        
        
    }
}