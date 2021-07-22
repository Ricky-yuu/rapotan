<?php

namespace App\Http\Controllers\API;
use App\Models\Nilai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class NilaiController extends Controller
{
    public function detail(Request $request)
    {
      $mapel = Nilai::where('id_user', Auth::user()->nomor_induk)->get();
      return response()->json([
        "message" => 'succcess',
        "data" => $mapel,
        ])->setStatusCode(200);
    
    }
}
