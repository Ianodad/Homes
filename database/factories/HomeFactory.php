<?php

namespace Database\Factories;

use App\Models\Home;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class HomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Home::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->text(30),
            'user_id' => User::count() >= 4 ? User::inRandomOrder()->first()->id: User::factory(),
            'location' => $this->faker->word(rand(1,2)),
            'description' =>rtrim($this->faker->sentence(rand(3,6)), "."),
            'no_rooms' => $this->faker->numberBetween(1,7),
            'type'=> $this->faker->word(rand(1,2)),
            'materials' => $this->faker->word(rand(1,7)),
            'price'=> $this->faker->numberBetween(1,10000),
        ];
    }
}
