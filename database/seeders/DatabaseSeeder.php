<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $faker = Faker::create('id_ID');

        // for($i=1; i<=50; i++) {
        //     DB::table('mahasiswas')->insert([
        //         'studentID'=>'03000811'&
        //     ]);
        // }

        \DB::table('matakuliahs')->insert([
            ['kode_matakuliah'=>'MK001', 
            'nama_matakuliah'=>'Pemrograman Aplikasi Bisnis',
            'sks'=>4],
            ['kode_matakuliah'=>'MK002', 
            'nama_matakuliah'=>'Audit SI',
            'sks'=>4],
            ['kode_matakuliah'=>'MK003', 
            'nama_matakuliah'=>'Sistem Informasi Perusahaan',
            'sks'=>4],
        ]
        );
    }
}
