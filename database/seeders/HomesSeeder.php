<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;

class HomesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //      
        Home::factory()->count(7)->create();
        // $user = User::factory()->count(3)->create();
        
        // $home = Home::factory()
        //     ->count(10)
        //     ->for($user)
        //     ->create();
    }
}
