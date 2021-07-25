<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kelass;
use App\Models\Mapels;
use App\Models\Nilai;
use Illuminate\Support\Facades\Auth;

class InputNilai extends Controller
{
    public function index()
    {
      $mapel = Mapels::where('id_kelas', Auth::user()->id_kelas)->get();
      return view('guru.mapel', compact('mapel'));
    }

    public function dataSiswa(Request $request)
    {
      $user = User::where('role','Siswa')->where('id_kelas', Auth::user()->id_kelas)->get();
      $idMapel = $request->input('id');
      return view('guru.inputnilai', compact('user', 'idMapel'));
    }

    public function simpanNilai(Request $request)
    {
      
      $simpan = Nilai::create([
        'id_user' => $request->noinduk,
        'id_mapel' => $request->mapel,
        'nilai' => $request->nilai,
      ]);

      return redirect()->route('dataSiswa');
    }
}
