<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(6,true);
        $slug =Str::substr(Str::lower(preg_replace('/\s+/', '-', $title)), 0, -1);
        return [
            'title' => $title,
            'body'=>$this->faker->paragraph(100,true),
            'slug' => $slug,
            'img'=>'https://via.placeholder.com/600/5F1130/FFFFFF/?text=LARAVEl:8.*',
            'created_at'=> $this->faker->dateTimeBetween('-1 year'),
        ];
    }
}
