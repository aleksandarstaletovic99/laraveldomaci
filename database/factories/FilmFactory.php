<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\TipFilma;
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           /* 'zanr'=>$this->faker->word(),
            'budzet'=>$this->faker->word(),
            'opis'=>$this->faker->sentence(),
            'godina'=>$this->faker->word(),
            'user_id'=>User::factory(),
            'tipfilma_id'=>TipFilma::factory()*/
        ];
    }
}
