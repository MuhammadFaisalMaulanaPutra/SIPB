<?php

namespace Database\Factories;

use App\Models\Kategori_Bencana;
use Illuminate\Database\Eloquent\Factories\Factory;

class kategori_bencanaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kategori_Bencana::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Kategori_Bencana'=> $this->faker->sentence(5),
        ];
    }
}
