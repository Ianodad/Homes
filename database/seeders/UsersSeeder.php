<?php

namespace Database\Seeders;

use App\Models\User;

use App\Models\Home;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(5)->create();
        // User::factory()->has(Home::factory()->count(3))->create();
        // $user = User::factory()->count(3)->create();
        
        // $home = Home::factory()
        //     ->count(10)
        //     ->for($user)
        //     ->create();

    }
}
