<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('kelass')->insert([
        'id' => '101',
        'nama_kelas' => 'Kelas 1',
      ]);

      DB::table('kelass')->insert([
        'id' => '102',
        'nama_kelas' => 'Kelas 2',
      ]);

      DB::table('kelass')->insert([
        'id' => '103',
        'nama_kelas' => 'Kelas 3',
      ]);

      DB::table('kelass')->insert([
        'id' => '104',
        'nama_kelas' => 'Kelas 4',
      ]);
      
      DB::table('kelass')->insert([
        'id' => '105',
        'nama_kelas' => 'Kelas 5',
      ]);

      DB::table('kelass')->insert([
        'id' => '106',
        'nama_kelas' => 'Kelas 6',
      ]);
    }
}