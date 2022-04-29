<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wali>
 */
class WaliFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_wali' => $this->faker->name(),
            'alamat_wali' => $this->faker->slug(),
            'pekerjaan_id' => mt_rand(1,5),
            'no_hp_wali' => Str::random(10),
            'mahasiswa_id' => mt_rand(1,5), 
        ];
    }
}
