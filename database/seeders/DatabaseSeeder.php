<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            ProfilesSeeder::class,
            OffresSeeder::class,
            RequestsSeeder::class,
            ResponsesSeeder::class,
            NotificationsSeeder::class,
            NotificationPreferencesSeeder::class,
            PointsSeeder::class,
            InterestsSeeder::class,
            TransactionsSeeder::class,
        ]);
    }
}
