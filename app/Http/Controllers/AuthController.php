<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function add_admin(Request $request)
    {
        $fields = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|unique:admins,email',
            'password'=>'required|string',
        ]);

        $admin = Admins::create([
            'name'=> $fields['name'],
            'email'=> $fields['email'],
            'password'=> bcrypt($fields['password']),
        ]);

        $token = $admin->createToken('myAppToken')->plainTextToken;

        $request->session()->regenerateToken();

        $response = [
            'admin'=> $admin,
            'token'=> $token
        ];

        return response($response,201);
    }

    public function logout(Request $request)
    {
        if($request->user()->currentAccessToken()->delete()){
            return response()->json([
                'message' => 'Successfully logged out'
            ]);
        }

        
    }

    public function login()
    {
        $fields = request()->validate([
            'email'=>'required|string',
            'password'=>'required|string',
        ]);

        //check email
        $admin = Admins::where('email',$fields['email'])->first();

        //check password
        if(!$admin || !Hash::check($fields['password'],$admin->password)){
            return response([
                'message'=>'Bad creds'
            ],401);
        }

        $token = $admin->createToken('myAppToken')->plainTextToken;

        $response = [
            'admin'=> $admin,
            'token'=> $token
        ];

        return response($response,201);
    }
}
