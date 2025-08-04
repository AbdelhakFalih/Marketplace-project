<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;
use Faker\Factory as Faker;

class NotificationsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $users = \App\Models\User::all()->pluck('id')->toArray();
        for ($i = 0; $i < 40; $i++) {
            Notification::create([
                'user_id' => $faker->randomElement($users),
                'type' => $faker->randomElement(['email', 'sms', 'whatsapp']),
                'message' => $faker->sentence,
                'status' => $faker->randomElement(['sent', 'pending', 'failed']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
