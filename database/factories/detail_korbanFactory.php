<?php

namespace Database\Factories;

use App\Models\DetailKorban;
use Illuminate\Database\Eloquent\Factories\Factory;

class detail_korbanFactory extends Factory
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
            'NIK'=> $this->faker->nik(),
            'Nama'=> $this->faker->name(),
            'Umur'=> $this->faker->mt_rand(1,100),
            'Kondisi'=> $this->faker->boolean(),
            'FK_Id_laporan' => mt_rand(1,10)
        ];
    }
}
