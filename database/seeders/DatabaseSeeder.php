<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PeopleController extends Controller
{
    public function run()
    {
        $faker = FakerFactory::create();

        for ($i = 0; $i < 200; $i++) {
            DB::table('people')->insert([
                'name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'age' => $faker->age,
                'description' => $faker->description,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}