<?php
/*
     Filename:     OrganizationTableSeeder.php
     Creator:      Kyle Fisher
     Create Date:  20171010
     Purpose:      The seeder for the organization table
     Log:
                   20171010:     Initial file creation.//KF
*/
use Illuminate\Database\Seeder;

class OrganizationTableSeeder extends Seeder
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

        DB::table('Organization')->insert([
            'Org_Name' => 'College World Series',
            'Org_Contact_First_Name' => $faker->firstName,
            'Org_Contact_Last_Name' => $faker->lastName,
            'Org_Address' => $faker->streetAddress,
            'Org_City' => $faker->city,
            'Org_State' => $faker->state,
            'Org_ZIP' => $faker->postcode,
            'Org_Phone_Number' => $faker->unique()->e164PhoneNumber,
        ]);

        DB::table('Organization')->insert([
            'Org_Name' => 'Omaha Steaks',
            'Org_Contact_First_Name' => $faker->firstName,
            'Org_Contact_Last_Name' => $faker->lastName,
            'Org_Address' => $faker->streetAddress,
            'Org_City' => $faker->city,
            'Org_State' => $faker->state,
            'Org_Zip' => $faker->postcode,
            'Org_Phone_Number' => $faker->unique()->e164PhoneNumber,
        ]);
    }
}
