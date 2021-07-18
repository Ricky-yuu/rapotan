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
        'id_kelas' => '',

        'nomor_induk' => 'E4419',

      ]);

      DB::table('users')->insert([
        'name' => 'Sulis',

        'email' => 'Sulis12@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'guru',

        'id_kelas' => '101',

        'nomor_induk' => 'E5419',

      ]);

      DB::table('users')->insert([
        'name' => 'Adit',

        'email' => 'adit12@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'guru',

        'id_kelas' => '102',

        'nomor_induk' => 'E5416',

      ]);

      DB::table('users')->insert([
        'name' => 'Risky',

        'email' => 'risky12@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'guru',

        'id_kelas' => '103',

        'nomor_induk' => 'E5414',

      ]);


      DB::table('users')->insert([
        'name' => 'Raihan',

        'email' => 'Raihan12@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'Siswa',
        
        'id_kelas' => '101',

        'nomor_induk' => '419',

      ]);

      DB::table('users')->insert([
        'name' => 'Rio',

        'email' => 'Rio@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'Siswa',
        
        'id_kelas' => '102',

        'nomor_induk' => '413',

      ]);

      DB::table('users')->insert([
        'name' => 'Rino',

        'email' => 'Rino@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'Siswa',
        
        'id_kelas' => '102',

        'nomor_induk' => '412',

      ]);
    }
}

