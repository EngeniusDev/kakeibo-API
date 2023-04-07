<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Income>
 */
class IncomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'income_amount' => rand(100, 1000000),
            'remarks' => '',
            // UserSeederに登録している上限
            'user_id' => rand(1,3),
            // 上記同様
            'income_categories_id' => rand(1,6),
            'created_at' => date('Y-m-d H:i:s'),
        ];
    }
}