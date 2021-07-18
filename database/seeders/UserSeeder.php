<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Ricky Aditya',
        'email' => 'ricky aditya@gmail.com',
        'password' => Hash::make('12345678'),
        'role' => 'admin',

        'nomor_induk' => 'E4419',

      ]);

      DB::table('users')->insert([
        'name' => 'Sulis',

        'email' => 'Sulis12@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'guru',

        'nomor_induk' => 'E5419',

      ]);

      DB::table('users')->insert([
        'name' => 'Raihan',

        'email' => 'Raihan12@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'Siswa',

        'nomor_induk' => '419',

      ]);
    }
}

