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
                'updated_at' => '2025-12-18 14:40:04',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Lisa',
                'email' => 'lisa@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$aUb.BuGfPR0dWRprlunBLupwJNBqzvxHLJbtobGjT0BKRXlbNrOr2',
                'remember_token' => NULL,
                'role' => 0,
                'streak_counter' => 3,
                'created_at' => '2025-12-17 12:19:53',
                'updated_at' => '2025-12-17 12:19:53',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Jake',
                'email' => 'jake@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$60qdkxtfyJY0TStUc5aW5ebxT7JMZbLfyLtoi./Qj.oihFobbcm8y',
                'remember_token' => NULL,
                'role' => 0,
                'streak_counter' => 7,
                'created_at' => '2025-12-17 12:20:22',
                'updated_at' => '2025-12-17 12:20:22',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Thomas',
                'email' => 'thomas@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$OOFDny6CZ0I/jlX6GHiX0Oi8biw9.6GxLroll6WVFZRdgLlzMKDr6',
                'remember_token' => NULL,
                'role' => 0,
                'streak_counter' => 15,
                'created_at' => '2025-12-17 12:20:43',
                'updated_at' => '2025-12-17 12:20:43',
            ),
            4 =>
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
