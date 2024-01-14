<?php

namespace Database\Seeders;
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PeopleTableSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 200; $i++) {
            \DB::table('people')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'phone_number' => $faker->phoneNumber,
                'street' => $faker->streetAddress,
                'country' => $faker->country,
            ]);
        }
    }
}