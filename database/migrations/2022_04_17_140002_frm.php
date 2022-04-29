<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->foreignId('jurusan_id');
            $table->string('alamat');
            $table->string('no_hp');
            $table->foreignId('wali_id');
            // $table->string('nama_wali');
            // $table->string('alamat_wali');
            // $table->foreignId('pekerjaan_id');
            // $table->string('no_hp_wali');
            $table->timestamps();
        });
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->foreignId('jurusan_id');
            $table->string('alamat');
            $table->string('no_hp');
            $table->timestamps();
        });
        Schema::create('walis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wali');
            $table->string('alamat_wali');
            $table->string('pekerjaan_id');
            $table->string('no_hp_wali');
            $table->foreignId('mahasiswa_id');
            $table->timestamps();
        });
        Schema::create('jurusans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
