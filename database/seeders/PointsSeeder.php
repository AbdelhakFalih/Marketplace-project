<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Point;
use Faker\Factory as Faker;

class PointsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $users = \App\Models\User::all()->pluck('id')->toArray();
        $transactions = \App\Models\Transaction::all()->pluck('id')->toArray();
        for ($i = 0; $i < 30; $i++) {
            Point::create([
                'user_id' => $faker->randomElement($users),
                'points' => $faker->numberBetween(0, 1000),
                'transaction_id' => $faker->optional()->randomElement($transactions),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
