<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => $this->faker->unique(2)->randomDigit,
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'website' => Str::random(10).'@website',
            'comment' => Str::random(10).' sed ut perspiciatis unde omnis iste natus error, @comment',
        ];
    }
}
