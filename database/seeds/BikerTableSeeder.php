<?php

use Illuminate\Database\Seeder;

class BikerTableSeeder extends Seeder
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

        for ($i = 0; $i < $limit; $i++) {
            DB::table('Biker')->insert([
                'Biker_Email' => $faker->unique()->email,
                'Biker_Zip' => $faker->postcode,
                'Biker_First_Name' => $faker->firstName,
                'Biker_Last_Name' => $faker->lastName,
                'Biker_Phone_Number' => $faker->unique()->e164PhoneNumber,
            ]);
        }
    }
}
