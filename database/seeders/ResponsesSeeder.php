<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Response;
use Faker\Factory as Faker;

class ResponsesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $requests = \App\Models\Request::all()->pluck('id')->toArray();
        $users = \App\Models\User::all()->pluck('id')->toArray();
        for ($i = 0; $i < 20; $i++) {
            Response::create([
                'request_id' => $faker->randomElement($requests),
                'user_id' => $faker->randomElement($users),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
