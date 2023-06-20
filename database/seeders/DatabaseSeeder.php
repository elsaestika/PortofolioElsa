<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'eca',
            'email' => 'elsa@gmail.com',
            'password' => bcrypt('estika0101')
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
