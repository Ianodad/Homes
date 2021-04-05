<?php

namespace Database\Factories;

use App\Models\Bid;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Home;

use Carbon\Carbon;


class BidFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bid::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $date = Carbon::create(2020, 5, 28, 0, 0, 0);
        $user_id = User::pluck('id')->random();
        $home_id = Home::pluck('id')->random();
        // error_log($home_id);
        $Home = Home::find($home_id);
        // error_log($Home);
        $starting_bid_price=$Home->price;
        // $current_bid = $starting_bid_price + rand() 

        return [
            //
            'user_id' => $user_id,
            'home_id' => $home_id,
            'starting_bid_price' => $starting_bid_price,
            'current_bid' => $starting_bid_price + rand(0, 100000),
            'count_down_timer' => $this->faker->dateTimeThisMonth($max = 'now', $timezone = null),
            'current_bid_time' => $this->faker->dateTimeThisMonth($max = 'now', $timezone = null),
            'minimum_increment_bid' => 1000,
            // 'winning bid' => rand(0,0),
            'total_bids' => rand(0,9),
        ];
    }
}
