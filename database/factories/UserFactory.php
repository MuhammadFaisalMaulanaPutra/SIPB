<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class userFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_user'=> $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'tgl_lahir' => $this->faker->date(now()),
            'password' => Hash::make('password'),
        ];
    }
}
