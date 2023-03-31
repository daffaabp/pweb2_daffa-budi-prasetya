<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\SessionGuard;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        User::create([
            'role_id' => '1',
            'name' => 'Daffa Budi Prasetya',
            'email' => 'daffa.budi2003@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        User::create([
            'role_id' => '2',
            'name' => 'Mohammad Ulul Azmi',
            'email' => 'ulul.azmi2003@gmail.com',
            'password' => Hash::make('user'),
        ]);

    }
}
