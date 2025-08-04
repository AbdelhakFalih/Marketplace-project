<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Interest;
use Faker\Factory as Faker;

class InterestsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $offers = \App\Models\Offre::all()->pluck('id')->toArray();
        $users = \App\Models\User::all()->pluck('id')->toArray();
        for ($i = 0; $i < 25; $i++) {
            Interest::create([
                'offer_id' => $faker->randomElement($offers),
                'user_id' => $faker->randomElement($users),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
