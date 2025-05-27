<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'super-admin@camp404.com'], // Biar gak dobel kalau udah pernah seed
            [
                'name' => 'Super Admin',
                'email' => 'super-admin@camp404.com',
                'password' => Hash::make('super-password'), // Biar ke-hash
                'role' => 'super-admin',
            ]
        );
    }
}
