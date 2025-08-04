<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use Faker\Factory as Faker;

class ProfilesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $users = \App\Models\User::all()->pluck('id')->toArray();
        for ($i = 0; $i < 15; $i++) {
            Profile::create([
                'user_id' => $faker->randomElement($users),
                'entity_name' => $faker->company,
                'location' => $faker->city,
                'prefecture' => $faker->state,
                'activity' => $faker->word,
                'main_product' => $faker->word,
                'president_name' => $faker->name,
                'unique_number' => $faker->unique()->ean8,
                'is_validated' => $faker->boolean(50),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
