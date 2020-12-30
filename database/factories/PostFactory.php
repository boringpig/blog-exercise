<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;

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
        $status = $this->faker->randomElement([0, 1, 2]);
        $published_at = null;
        if ($status === 1) {
            $published_at = Carbon::now()->addDay();
        }
        return [
            'user_id' => User::factory()->create()->id,
            'title' => $this->faker->text(5),
            'content' => $this->faker->sentence(),
            'status' => $status,
            'published_at' => $published_at
        ];
    }
}
