<?php
/*
     Filename:     UsersTableSeeder.php
     Creator:      Kyle Fisher
     Create Date:  20171010
     Purpose:      The seeder for the users table
     Log:
                   20171010:     Initial file creation.//KF
*/
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

        //Used to change the amount of users you want to seed
        $limit = 30;

        //This insert is to guarantee that you have an admin user in the database
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
