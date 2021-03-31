<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Home;

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
        $this->call(HomesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(BidsSeeder::class);
        // $user = User::factory()->count(3)->create();
        
        // $home = Home::factory()
        //     ->count(10)
        //     ->for($user)
        //     ->create();
        
        //  $user =User::factory()->has(Home::factory()->count(3))->create();
                
    }
}
