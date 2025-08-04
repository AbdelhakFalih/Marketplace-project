<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NotificationPreference;
use Faker\Factory as Faker;

class NotificationPreferencesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $users = \App\Models\User::all()->pluck('id')->toArray();
        foreach ($users as $userId) {
            NotificationPreference::create([
                'user_id' => $userId,
                'email_enabled' => $faker->boolean(80),
                'sms_enabled' => $faker->boolean(30),
                'whatsapp_enabled' => $faker->boolean(20),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
