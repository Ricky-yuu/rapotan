<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    // kelas 1

     DB::table('mapels')->insert([
            'id' => '11',
            'nama_mapel' => 'Matematika',
            'id_kelas' => '101',
     ]);
     
     DB::table('mapels')->insert([
            'id' => '12',
            'nama_mapel' => 'Bhs Inggris',
            'id_kelas' => '101',
    ]);

    DB::table('mapels')->insert([
        'id' => '13',
        'nama_mapel' => 'IPA',
        'id_kelas' => '101',
    ]);

    DB::table('mapels')->insert([
        'id' => '14',
        'nama_mapel' => 'IPS',
        'id_kelas' => '101',
    ]);

    DB::table('mapels')->insert([
        'id' => '15',
        'nama_mapel' => 'PENJAS',
        'id_kelas' => '101',
    ]);

    DB::table('mapels')->insert([
        'id' => '16',
        'nama_mapel' => 'Bhs Indonesia',
        'id_kelas' => '101',
    ]);

    DB::table('mapels')->insert([
        'id' => '17',
        'nama_mapel' => 'Bhs Jawa',
        'id_kelas' => '101',
    ]);

    DB::table('mapels')->insert([
        'id' => '18',
        'nama_mapel' => 'PPKN',
        'id_kelas' => '101',
    ]);

    DB::table('mapels')->insert([
        'id' => '19',
        'nama_mapel' => 'Agama',
        'id_kelas' => '101',
    ]);
        
    // Kelas 2 

    DB::table('mapels')->insert([
        'id' => '21',
        'nama_mapel' => 'Matematika',
        'id_kelas' => '102',
 ]);
 
    DB::table('mapels')->insert([
        'id' => '22',
        'nama_mapel' => 'Bhs Inggris',
        'id_kelas' => '102',
]);

        DB::table('mapels')->insert([
    'id' => '23',
    'nama_mapel' => 'IPA',
    'id_kelas' => '102',
]);

    DB::table('mapels')->insert([
    'id' => '24',
    'nama_mapel' => 'IPS',
    'id_kelas' => '102',
]);

    DB::table('mapels')->insert([
    'id' => '25',
    'nama_mapel' => 'PENJAS',
    'id_kelas' => '102',
]);

    DB::table('mapels')->insert([
    'id' => '26',
    'nama_mapel' => 'Bhs Indonesia',
    'id_kelas' => '102',
]);

    DB::table('mapels')->insert([
    'id' => '27',
    'nama_mapel' => 'Bhs Jawa',
    'id_kelas' => '102',
]);

DB::table('mapels')->insert([
    'id' => '28',
    'nama_mapel' => 'PPKN',
    'id_kelas' => '102',
]);

    DB::table('mapels')->insert([
    'id' => '29',
    'nama_mapel' => 'Agama',
    'id_kelas' => '102',
]);

// Kelas 3
    DB::table('mapels')->insert([
            'id' => '31',
            'nama_mapel' => 'Matematika',
            'id_kelas' => '103',
     ]);
     
     DB::table('mapels')->insert([
            'id' => '32',
            'nama_mapel' => 'Bhs Inggris',
            'id_kelas' => '103',
    ]);

    DB::table('mapels')->insert([
        'id' => '33',
        'nama_mapel' => 'IPA',
        'id_kelas' => '103',
    ]);

    DB::table('mapels')->insert([
        'id' => '34',
        'nama_mapel' => 'IPS',
        'id_kelas' => '103',
    ]);

    DB::table('mapels')->insert([
        'id' => '35',
        'nama_mapel' => 'PENJAS',
        'id_kelas' => '103',
    ]);

    DB::table('mapels')->insert([
        'id' => '36',
        'nama_mapel' => 'Bhs Indonesia',
        'id_kelas' => '103',
    ]);

    DB::table('mapels')->insert([
        'id' => '37',
        'nama_mapel' => 'Bhs Jawa',
        'id_kelas' => '103',
    ]);

    DB::table('mapels')->insert([
        'id' => '38',
        'nama_mapel' => 'PPKN',
        'id_kelas' => '103',
    ]);

    DB::table('mapels')->insert([
        'id' => '39',
        'nama_mapel' => 'Agama',
        'id_kelas' => '103',
    ]);

    // Kelas 4

    DB::table('mapels')->insert([
        'id' => '41',
        'nama_mapel' => 'Matematika',
        'id_kelas' => '104',
 ]);
 
 DB::table('mapels')->insert([
        'id' => '42',
        'nama_mapel' => 'Bhs Inggris',
        'id_kelas' => '104',
]);

DB::table('mapels')->insert([
    'id' => '43',
    'nama_mapel' => 'IPA',
    'id_kelas' => '104',
]);

DB::table('mapels')->insert([
    'id' => '44',
    'nama_mapel' => 'IPS',
    'id_kelas' => '104',
]);

DB::table('mapels')->insert([
    'id' => '45',
    'nama_mapel' => 'PENJAS',
    'id_kelas' => '104',
]);

DB::table('mapels')->insert([
    'id' => '46',
    'nama_mapel' => 'Bhs Indonesia',
    'id_kelas' => '104',
]);

DB::table('mapels')->insert([
    'id' => '47',
    'nama_mapel' => 'Bhs Jawa',
    'id_kelas' => '104',
]);

DB::table('mapels')->insert([
    'id' => '48',
    'nama_mapel' => 'PPKN',
    'id_kelas' => '104',
]);

DB::table('mapels')->insert([
    'id' => '49',
    'nama_mapel' => 'Agama',
    'id_kelas' => '104',
]);

// Kelas5

DB::table('mapels')->insert([
    'id' => '51',
    'nama_mapel' => 'Matematika',
    'id_kelas' => '105',
]);

DB::table('mapels')->insert([
    'id' => '52',
    'nama_mapel' => 'Bhs Inggris',
    'id_kelas' => '105',
]);

DB::table('mapels')->insert([
'id' => '53',
'nama_mapel' => 'IPA',
'id_kelas' => '105',
]);

DB::table('mapels')->insert([
'id' => '54',
'nama_mapel' => 'IPS',
'id_kelas' => '105',
]);

DB::table('mapels')->insert([
'id' => '55',
'nama_mapel' => 'PENJAS',
'id_kelas' => '105',
]);

DB::table('mapels')->insert([
'id' => '56',
'nama_mapel' => 'Bhs Indonesia',
'id_kelas' => '105',
]);

DB::table('mapels')->insert([
'id' => '57',
'nama_mapel' => 'Bhs Jawa',
'id_kelas' => '105',
]);

DB::table('mapels')->insert([
'id' => '58',
'nama_mapel' => 'PPKN',
'id_kelas' => '105',
]);

DB::table('mapels')->insert([
'id' => '59',
'nama_mapel' => 'Agama',
'id_kelas' => '105',
]);

// Kelas 6

DB::table('mapels')->insert([
    'id' => '61',
    'nama_mapel' => 'Matematika',
    'id_kelas' => '106',
]);

DB::table('mapels')->insert([
    'id' => '62',
    'nama_mapel' => 'Bhs Inggris',
    'id_kelas' => '106',
]);

DB::table('mapels')->insert([
'id' => '63',
'nama_mapel' => 'IPA',
'id_kelas' => '106',
]);

DB::table('mapels')->insert([
'id' => '64',
'nama_mapel' => 'IPS',
'id_kelas' => '106',
]);

DB::table('mapels')->insert([
'id' => '65',
'nama_mapel' => 'PENJAS',
'id_kelas' => '106',
]);

DB::table('mapels')->insert([
'id' => '66',
'nama_mapel' => 'Bhs Indonesia',
'id_kelas' => '106',
]);

DB::table('mapels')->insert([
'id' => '67',
'nama_mapel' => 'Bhs Jawa',
'id_kelas' => '106',
]);

DB::table('mapels')->insert([
'id' => '68',
'nama_mapel' => 'PPKN',
'id_kelas' => '106',
]);

DB::table('mapels')->insert([
'id' => '69',
'nama_mapel' => 'Agama',
'id_kelas' => '106',
]);
    }
}
