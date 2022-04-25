<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Fertilizer;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
            Crops::class,
            UsersTableSeeder::class

        ]);
         Fertilizer::factory(400)->create();
         Client::factory(30)->create();

    }
}
