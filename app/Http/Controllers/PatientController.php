<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class PatientController extends Controller
{
    public function __construct() {
        $this->middleware('permission:getProfile')->only('getProfile');
    }
    public function patient_login()
    {
        $fields = request()->validate([
            'email' => 'required|string|unique:users',
            'password' => 'required|string',

        ]);
        //check email
        $patient = Patients::where('email',$fields['email'])->first();

        //! edit hash password
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

    public function patient_register(){
        $fields = request()->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string',

        ]);

        $patient = Patients::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
        ]);

        $token = $patient->createToken('myAppToken')->plainTextToken;

        $response = [
            'patient'=> $patient,
            'token'=> $token
        ];

        $patientRole = Role::where('name','patient')->first();
        if($patientRole){
            $patient->assignRole($patientRole);
        }

        return response($response,201);
    }

    public function getProfile() {
        $patient = auth()->user();
        return response()->json([
            'patient'=>$patient
        ]);
    }
}
