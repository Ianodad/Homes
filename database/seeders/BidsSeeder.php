<?php

namespace Database\Seeders;

use App\Models\Bid;
use Illuminate\Database\Seeder;

class BidsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //      
        Bid::factory()->count(100)->create();
       
    }
}
