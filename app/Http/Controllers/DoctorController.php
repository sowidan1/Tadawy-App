<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Doctors;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class DoctorController extends Controller
{
    public function doctor_login()
    {
        $fields = request()->validate([
            'email'=>'required|string',
            'password'=>'required|string',
        ]);

        //check email
        $doctor = Doctors::where('email',$fields['email'])->first();

        //check password
        if(!$doctor || !Hash::check($fields['password'], $doctor->password)){
            // instead try
            $hashedPassword = Hash::make($fields['password']);
            if(!$doctor || $hashedPassword !== $doctor->password){
               // failed login
            }

        $token = $doctor->createToken('myAppToken')->plainTextToken;

        $response = [
            'doctor'=> $doctor,
            'token'=> $token
        ];

        return response($response,201);
        }
    }

    public function index()
    {
        $doctors = Doctors::select('name', 'photo','specialty','id')->get();

        return $doctors;
    }

    }

