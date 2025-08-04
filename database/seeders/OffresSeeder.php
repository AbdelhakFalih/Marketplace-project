<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Offre;
use Faker\Factory as Faker;

class OffresSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $users = \App\Models\User::all()->pluck('id')->toArray();
        for ($i = 0; $i < 30; $i++) {
            Offre::create([
                'user_id' => $faker->randomElement($users),
                'name' => $faker->word,
                'technical_sheet' => $faker->optional()->text,
                'flyer' => $faker->optional()->word . '.pdf',
                'price' => $faker->randomFloat(2, 1, 1000),
                'delivery_conditions' => $faker->randomElement(['home', 'store1', 'store2', 'cooperative']),
                'store1_city' => $faker->optional()->city,
                'store2_city' => $faker->optional()->city,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
