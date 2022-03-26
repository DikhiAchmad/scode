<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::insert([
            [
                'name' => 'Dikhi Achmad Dani',
                'telp' => '089424535234',
                'jenis_kelamin' => 'L',
                'email' => 'dikia656@gmail.com',
                'password' => Hash::make('BetterOne'),
                'status' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ratu',
                'telp' => '08224535234',
                'jenis_kelamin' => 'P',
                'email' => 'rad@gmail.com',
                'password' => Hash::make('BetterOne'),
                'status' => 'pengajar',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'alifia',
                'telp' => '08922535234',
                'jenis_kelamin' => 'P',
                'email' => 'rad2@gmail.com',
                'password' => Hash::make('BetterOne'),
                'status' => 'user',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}