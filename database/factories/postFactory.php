<?php

namespace Database\Factories;

use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Illuminate\Support\Arr;

class postFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = [
        '玄米',
        'アーモンド',
        'くるみ',

        ];
        return [
            'name' => $name[array_rand($name)],
            'category_id' => Arr::random(Arr::pluck(Category::all(), 'id')),
            'img_path' => 'storage/food_image/' . rand(1, 11) . '.jpeg',
        ];
    }
}
