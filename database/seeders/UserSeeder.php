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
        'email' => 'meliodaskirisami@gmail.com',
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
        'name' => 'Bangik',

        'email' => 'Bangik12@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'guru',

        'id_kelas' => '104',

        'nomor_induk' => 'E5424',

      ]);

      DB::table('users')->insert([
        'name' => 'unknows',

        'email' => 'unknows12@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'guru',

        'id_kelas' => '105',

        'nomor_induk' => 'E5425',

      ]);

      DB::table('users')->insert([
        'name' => 'Ricky',

        'email' => 'ricky12@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'guru',

        'id_kelas' => '106',

        'nomor_induk' => 'E5426',

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
        'name' => 'Roni',

        'email' => 'Roni@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'Siswa',
        
        'id_kelas' => '102',

        'nomor_induk' => '417',

      ]);

      DB::table('users')->insert([
        'name' => 'Rizad',

        'email' => 'Rizad@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'Siswa',
        
        'id_kelas' => '103',

        'nomor_induk' => '418',

      ]);

      DB::table('users')->insert([
        'name' => 'Rezad',

        'email' => 'Rezad@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'Siswa',
        
        'id_kelas' => '104',

        'nomor_induk' => '490',

      ]);

      DB::table('users')->insert([
        'name' => 'Rodszad',

        'email' => 'Redazad@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'Siswa',
        
        'id_kelas' => '105',

        'nomor_induk' => '420',

      ]);

      DB::table('users')->insert([
        'name' => 'Rehsdzad',

        'email' => 'Rezaascd@gmail.com',

        'password' => Hash::make('12345678'),

        'role' => 'Siswa',
        
        'id_kelas' => '106',

        'nomor_induk' => '480',

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

