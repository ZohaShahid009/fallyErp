<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompanyFactory extends Factory
{
    protected $model = Company::class;
    /**
     * Define the model's default state.
     * protected $model = C::class;
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name' => $this->faker->name(),
            'company_email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
