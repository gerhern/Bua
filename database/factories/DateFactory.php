<?php

namespace Database\Factories;

use App\Models\{Date, User};
use Illuminate\Database\Eloquent\Factories\Factory;

class DateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Date::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'birthday' => $this->faker->date(),
            'annualInn' => $this->faker->randomFloat(2,0,100000),
            'user_id' => User::factory()->create()
        ];
    }
}
