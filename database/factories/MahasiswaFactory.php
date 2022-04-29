<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
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
            'nim' => Str::random(5),
            'jurusan_id' => mt_rand(1,3),
            'alamat' => $this->faker->slug(),
            'no_hp' => Str::random(5),
            'wali_id' => mt_rand(1,5), 
            // 'nama_wali' => Str::random(5),
            // 'alamat_wali' => Str::random(5),
            // 'pekerjaan_id' => mt_rand(1,2),
            // 'no_hp_wali' => Str::random(5),     
        ];
    }
}
