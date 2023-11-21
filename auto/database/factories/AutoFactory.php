<?php

namespace Database\Factories;

use App\Models\Auto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Auto>
 */
class AutoFactory extends Factory
{
    protected $model = Auto::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new CarNameProvider($this->faker));
        $this->faker->addProvider(new FuelTypeProvider($this->faker));

        return [
            'name' => $this->faker->carName(),
            'year' => $this->faker->numberBetween(2000, 2023),
            'price' => $this->faker->numberBetween(1000, 10000), 
            'fuel_type' => $this->faker->fuelType(),

        ];
    }
}
