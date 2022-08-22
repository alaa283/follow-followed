<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(28)->create();
        // \App\Models\Folow_User::factory(30)->create();
        // User::factory(10)->create();
    }
}
