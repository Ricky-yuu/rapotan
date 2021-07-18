<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::where('role','Siswa')->get();
        return view('admin.datasiswa', compact('user'));
    }
}
