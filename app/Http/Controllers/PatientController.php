<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    public function patient_login()
    {
        $fields = request()->validate([
            'email' => 'required|string|unique:users',
            'password' => 'required|string',

        ]);
        //check email
        $patient = Patients::where('email',$fields['email'])->first();

        //check password
        if(!$patient || !Hash::check($fields['password'], $patient->password)){
            // instead try
        $hashedPassword = Hash::make($fields['password']);
            if(!$patient || $hashedPassword !== $patient->password){
               // failed login
            }

        $token = $patient->createToken('myAppToken')->plainTextToken;

        $response = [
            'patient'=> $patient,
            'token'=> $token
        ];

        return response($response,201);
    }

}
}
