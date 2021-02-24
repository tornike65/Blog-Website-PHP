<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'user_id' => rand(1, 4),
            'category_id' => rand(1, 5),
            'title' => $this->faker->name,
            'slug' => Str::slug($this->faker->name),
            'short_desc' => $this->faker->paragraph(1),
            'body' => $this->faker->paragraph(10),
            'image' => 'images/img_' . rand(1, 12) .'.jpg',
        ];
    }
}
