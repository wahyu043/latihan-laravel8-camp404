<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'Pak Guru',
        //     'role' => 'admin',
        //     'email' => 'admin@camp404.com',
        //     'password' => bcrypt('password123')
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'Andi Saputra',
        //     'role' => 'siswa',
        //     'siswa_id' => 1,
        //     'email' => 'andi@camp404.com',
        //     'password' => bcrypt('password123')
        // ]);
        DB::table('users')->insert([
            'name' => 'Budi Cahya',
            'role' => 'siswa',
            'siswa_id' => 2,
            'email' => 'budi@camp404.com',
            'password' => bcrypt('password123')
        ]);
    }
}
