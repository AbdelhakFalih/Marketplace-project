<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use Faker\Factory as Faker;

class TransactionsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $offers = \App\Models\Offre::all()->pluck('id')->toArray();
        $users = \App\Models\User::all()->pluck('id')->toArray();
        for ($i = 0; $i < 20; $i++) {
            Transaction::create([
                'offer_id' => $faker->randomElement($offers),
                'buyer_id' => $faker->randomElement($users),
                'seller_id' => $faker->randomElement(array_diff($users, [$faker->randomElement($users)])),
                'amount' => $faker->randomFloat(2, 1, 1000),
                'commission' => $faker->optional()->randomFloat(2, 0, 100),
                'logistic_cost' => $faker->optional()->randomFloat(2, 0, 50),
                'status' => $faker->randomElement(['pending', 'completed', 'canceled']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
