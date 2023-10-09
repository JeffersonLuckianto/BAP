<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('matakuliahs')->insert([
            ['kode_matakuliah'=>'MK001',
            'nama_matakuliah'=>'Pemrograman Aplikasi Bisnis',
            'sks'=>4]
        ]
        );

        $faker = Faker::create('id_ID');

        for($i=0; $i<=50; $i++) {

            \DB::table('mahasiswas')->insert([
               'studentID' => '03000811'&$i,
               'name' => $faker->name,
               'tahunMasuk' => '2021',
               'jurusan' => $faker->address 
            ]);
        }

        for($i=1; $i<=3; $i++) {

            \DB::table('khs')->insert([
               'kode_khs' => 'KHS0'.$i,
               'keterangan' => '202'.$i,
               'keterangan_Singkat' => '202'.$i,
            ]);

            \DB::table('khsdetails')->insert([
                'kode_khs_detail' => 'KHS0'.$i.$i+1,
                'kode_khs' => 'KHS0'.$i,
                'nilai' => 100,
             ]);
        }
    }
}
