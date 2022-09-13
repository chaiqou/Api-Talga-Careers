<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		return [
			'title'   => $this->faker->jobTitle(),
			'city'    => $this->faker->citySuffix(),
			'company' => $this->faker->companySuffix(),
			'jobType' => $this->faker->jobTitle(),
		];
	}
}
