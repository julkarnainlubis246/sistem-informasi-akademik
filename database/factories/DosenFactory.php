<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nip' => Str::random(10),
            'jurusan_id' => mt_rand(1,3),
            'alamat' => $this->faker->slug(),
            'no_hp' => Str::random(10), 
        ];
    }
}
