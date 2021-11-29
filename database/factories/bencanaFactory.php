<?php

namespace Database\Factories;

use App\Models\Bencana;
use Illuminate\Database\Eloquent\Factories\Factory;

class bencanaFactory extends Factory
{   
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bencana::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nama_Bencana'=> $this->faker->word(),
            'FK_Id_kategori_bencana' => mt_rand(1,2)
        ];
    }
}
