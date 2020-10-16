<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Shibaji\Admin\Models\Post;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'slag' => $this->faker->slag,
            'content' => $this->faker->content,
            'status' => $this->faker->status
        ];
    }
}
