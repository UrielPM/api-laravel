<?php

namespace Database\Factories;

use Nette\Utils\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'posts/' . $this->faker->image('public/storage/posts', 640, 480, null, false)
        ];
    }
}
