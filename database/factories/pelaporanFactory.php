<?php

namespace Database\Factories;

use App\Models\Pelaporan;
use Illuminate\Database\Eloquent\Factories\Factory;

class pelaporanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pelaporan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul_laporan' => $this->faker->sentence(3),
            'isi_laporan' => $this->faker->sentence(3),
            'waktu_bencana'=> $this->faker->time(),
            'status'=> $this->faker->boolean(),
            'FK_Id_user' => mt_rand(1,5),
            'FK_Id_bencana' => mt_rand(1,5),
            'FK_Id_kecamatan' => mt_rand(1,5),
        ];
    }
}