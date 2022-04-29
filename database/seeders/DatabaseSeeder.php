<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wali;
use App\Models\Dosen;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
use App\Models\Pekerjaan;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'julkarnain lubis',
            'email' => 'julzain@outlook.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), 
            'remember_token' => Str::random(10),  
            'is_admin' => '1',         
        ]);
        Mahasiswa::create([
            'nama' => 'julkarnain lubis',
            'nim' => 'uy93247937',
            'jurusan_id' => '1',
            'alamat' => 'jl. kelinci no. 03',
            'no_hp' => '08264373467',
            'wali_id' => '1',
            // 'nama_wali' => 'jokowi',
            // 'alamat_wali' => '1',
            // 'pekerjaan_id' => '1',
            // 'no_hp_wali' => '08796858434',
        ]);
        Dosen::create([
            'nama' => 'sandika galih',
            'nip' => '98759347539',
            'jurusan_id' => '1',
            'alamat' => 'jl. turi no. 03',
            'no_hp' => '890887345',
        ]);
        Wali::create([
            'nama_wali' => 'Jokowi',
            'alamat_wali' => 'jl. ulin no. 09',
            'pekerjaan_id' => '1',
            'no_hp_wali' => '09458457845',
            'mahasiswa_id' => '1',
        ]);
        Jurusan::create([
            'nama' => 'Prodi TI',
        ]);
        Jurusan::create([
            'nama' => 'Teknik Sipil',
        ]);
        Jurusan::create([
            'nama' => 'Pertanian',
        ]);
        Pekerjaan::create([
            'nama' => 'PNS',
        ]);
        Pekerjaan::create([
            'nama' => 'Swasta',
        ]);

        // User::factory(10)->create();
        // Mahasiswa::factory(5)->create();
        // Dosen::factory(7)->create();
        // Wali::factory(5)->create();
        // Jurusan::factory(10)->create();

    }
}
