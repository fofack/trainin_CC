<?php

namespace Database\Seeders;

use App\Models\basile\Category;
use App\Models\basile\Client;
use App\Models\basile\Livre;
use App\Models\basile\Pret;
use App\Models\User;
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
        User::factory(10)->create();
        Category::factory(10)->create();
        Client::factory(10)->create();
        Livre::factory(10)->create();
        Pret::factory(10)->create();
    }
}
