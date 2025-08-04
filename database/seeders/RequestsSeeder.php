<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Request;
use Faker\Factory as Faker;

class RequestsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $users = \App\Models\User::all()->pluck('id')->toArray();
        for ($i = 0; $i < 25; $i++) {
            Request::create([
                'user_id' => $faker->randomElement($users),
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'type' => $faker->randomElement(['product', 'service']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
