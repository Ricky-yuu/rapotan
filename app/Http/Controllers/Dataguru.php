<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Dataguru extends Controller
{
    public function index()
    {
        $user = User::where('role','guru')->get();
        return view('admin.dataguru', compact('user'));
    }
}

