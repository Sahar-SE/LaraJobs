<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
        'job_title' => $this->faker->sentence(),
        'tags' => 'Laravel, api, backend',
        'company' => $this->faker->company(),
        'email' => $this->faker->companyEmail(),
        'website' => $this->faker->url(),
        'location' => $this->faker->city(),
        'image' => 'https://source.unsplash.com/random/200x200',
        'salary' => $this->faker->numberBetween(1000, 10000),
        'description' => $this->faker->paragraph(5),
      ];
    }
}
