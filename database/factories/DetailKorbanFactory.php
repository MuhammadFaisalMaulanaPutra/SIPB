<?php

namespace Database\Factories;

use App\Models\DetailKorban;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailKorbanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DetailKorban::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'NIK'=> $this->faker->mt_rand(1,100),
            'NIK'=> mt_rand(1,100),
            'Nama'=> $this->faker->name(),
            // 'Umur'=> $this->faker->mt_rand(1,100),
            'Umur'=> mt_rand(1,100),
            'Kondisi'=> $this->faker->boolean(),
            'FK_Id_laporan' => mt_rand(1,5)
        ];
    }
}
