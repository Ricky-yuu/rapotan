<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelass;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::where('role','Siswa')->get();
        return view('admin.datasiswa', compact('user'));
    }

    public function kelas()
    {
      $kelas = Kelass::all();
      return view('admin.dataKelas', compact('kelas'));
    }

    public function siswa(Request $request)
    {
      $user = User::where('role','Siswa')->where('id_kelas', $request->input('id'))->get();
      return view('admin.datasiswa', compact('user'));
    }
}
