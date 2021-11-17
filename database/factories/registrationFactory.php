<?php

namespace Database\Factories;

use App\Models\registration;
use Illuminate\Database\Eloquent\Factories\Factory;

class registrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = registration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->word,
        'middlename' => $this->faker->word,
        'lastname' => $this->faker->word,
        'address' => $this->faker->word,
        'birthdate' => $this->faker->word,
        'age' => $this->faker->randomDigitNotNull,
        'sex' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
