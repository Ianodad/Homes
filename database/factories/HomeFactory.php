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
            'user_id' => User::count() >= 10 ? User::inRandomOrder()->first()->id: User::factory(),
            'location' => $this->faker->randomElement(['Karen', 'Kileleshwa', 'Kitisuru', 'Langata', 'Runda', 'Lavington', 'Muthaiga']),
            'description' =>rtrim($this->faker->sentence(rand(3,6)), "."),
            'no_rooms' => $this->faker->numberBetween(1,7),
            'type'=> $this->faker->randomElement(['Mansion', 'Town House', 'Condo', 'Bungalow', 'Apartment', 'Tiny House' ]),
            'bid_count'=>rand(0,7),
            'materials' => $this->faker->randomElement(['Wooden Floor', 'Solar Power', 'Pool', 'Jacuzzi', 'Lift', 'Tiles' ]),
            'price'=> $this->faker->numberBetween(1000000,100000000),
        ];
    }
}
