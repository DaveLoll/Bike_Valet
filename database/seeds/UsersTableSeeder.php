<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 30;

        DB::table('users')->insert([
            'User_First_Name' => 'Admin',
            'User_Last_Name' => 'User',
            'User_Email' => $faker->unique()->email,
            'User_Phone_Number' => $faker->unique()->e164PhoneNumber,
            'password' => bcrypt('secret'),
            'User_Role' => $faker->randomElement(['Admin']),
            'User_Status' => $faker->randomElement(['Registered']),
        ]);

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'User_First_Name' => $faker->firstName,
                'User_Last_Name' => $faker->lastName,
                'User_Email' => $faker->unique()->email,
                'User_Phone_Number' => $faker->unique()->e164PhoneNumber,
                'password' => bcrypt('secret'),
                'User_Role' => $faker->randomElement(['Valet', 'Lead Valet', 'Admin']),
                'User_Status' => $faker->randomElement(['Pre Registered', 'Registered', 'Terminated'] ),
            ]);
        }
    }
}
