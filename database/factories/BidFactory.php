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
        return [
            //
            'user_id' => User::pluck('id')->random(),
            'home_id' => Home::pluck('id')->random(),
            'starting_bid_price' => rand(1,5),
            'current_bid' => rand(0,7),
            'count_down_timer' => $this->faker->dateTimeThisMonth($max = 'now', $timezone = null),
            'current_bid_time' => $this->faker->dateTimeThisMonth($max = 'now', $timezone = null),
            'minimum_increment_bid' => rand(0,10000000),
            'winning bid' => rand(0,10000000),
            'total_bids' => rand(0,9),
        ];
    }
}
