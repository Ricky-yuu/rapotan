<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required',
            ]);



            
            
            $user = User::where('email', $request->email)->first();
            
            if($user != null && Hash::check($request->password, $user->password)){
                $token = $user->createToken($user->email,['role:siswa']);
                return response()->json([
                    "message" => 'succcess',
                    "data" => $user,
                    "token" => $token->plainTextToken
                    ])->setStatusCode(200);
                }
                
                else{
                    return response()->json([
                        "message"=>'email or password is wrong'
                        ])->setStatusCode(401);
                    }
                    
                } catch (QueryException $err) {
                    return response()->json([
                        'message' => 'gagal validasi data',
                    ], 401);
                }
                   
    }

    public function logout(Request $request)
    {
        {
            $removeToken = $request->user()->tokens()->delete();
    
            if ($removeToken) {
                return response()->json([
                    'success' => true,
                    'message' => 'Logout Berhasil!',
                ]);
            }
        }
    }

    

}
