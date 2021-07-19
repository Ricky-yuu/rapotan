<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Kelass;

class DataNilai extends Controller
{
    public function index()
    {
        $user = User::where('role','siswa')->get();
        return view('admin.datanilai', compact('user'));
    }

    public function kelas()
    {
      $kelas = Kelass::all();
      return view('admin.datanilaikelas', compact('kelas'));
    }

    public function siswa(Request $request)
    {
      $user = User::where('role','Siswa')->where('id_kelas', $request->input('id'))->get();
      return view('admin.datanilai', compact('user'));
    }
}
