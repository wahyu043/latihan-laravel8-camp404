<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Budi Saputra',
            'nis' => 102,
            'tgl_lahir' => '2003-12-22'
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Nisa Fitriya',
            'nis' => 103,
            'tgl_lahir' => '2004-05-30'
        ]);

        DB::table('siswa')->insert([
            'nama' => 'Wahyu Mahmudi',
            'nis' => 104,
            'tgl_lahir' => '2003-02-25'
        ]);
    }
}
