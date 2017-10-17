<?php
/*
     Filename:     EventTableSeeder.php
     Creator:      Kyle Fisher
     Create Date:  20171010
     Purpose:      The seeder for the event table
     Log:
                   20171010:     Initial file creation.//KF
*/
use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        //Using these variables so both events below are at the same geographic location
        $address = $faker->streetAddress;
        $city = $faker->city;
        $state = $faker->state;
        $zip = $faker->postcode;

        DB::table('Event')->insert([
            'Event_Name' => 'College World Series 1st inning',
            'Org_ID' => 1,
            'Event_Date' => '2018-03-31',
            'Event_Start_Time' => '12:00:00',
            'Event_Stop_Time' => '14:00:00',
            'Event_Address' => $address,
            'Event_City' => $city,
            'Event_State' => $state,
            'Event_Zip' => $zip,
            'Event_Status' => $faker->randomElement(['Planned']),
        ]);

        DB::table('Event')->insert([
            'Event_Name' => 'College World Series 2nd inning',
            'Org_ID' => 1,
            'Event_Date' => '2018-03-31',
            'Event_Start_Time' => '14:00:00',
            'Event_Stop_Time' => '16:00:00',
            'Event_Address' => $address,
            'Event_City' => $city,
            'Event_State' => $state,
            'Event_Zip' => $zip,
            'Event_Status' => $faker->randomElement(['Planned']),
        ]);
    }
}
