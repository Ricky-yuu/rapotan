<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kelass;

class InputNilai extends Controller
{
    public function index()
    {
      $user = User::where('role','Siswa')->get();
      return view('guru.inputnilai', compact('user'));
    }
}

