<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Doctor;
use App\Models\Doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorWebController extends Controller
{

    
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'Full_Name' => 'required|string',
            'photo' => 'nullable', // Typo here, should be 'photo'
            'email' => 'required|email|unique:doctors,email',
            'password' => 'required|string',
            'phoneNumber' => 'required|string',
            'specialty' => 'required|string',
            'year_of_experience' => 'required|integer',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'nullable|date',
            'clinic' => 'required|exists:clinics,id',
        ]);

        // Create a new Doctor instance
        Doctors::create([
            'name' => $request->input('Full_Name'),
            'email' => $request->input('email'),
            'photo' => $request->input('photo'), // Default photo for new doctors
            'password' => bcrypt($request->input('password')), // Hash the password
            'phone' => $request->input('phoneNumber'),
            'specialty' => $request->input('specialty'),
            'year_of_experience' => $request->input('year_of_experience'),
            'gender' => $request->input('gender'),
            'date_of_birth' => $request->input('date_of_birth'),
            'clinic_id' => $request->input('clinic'),
        ]);

        return redirect()->back()->with('success', 'Your form has been submitted successfully!');
    }

    public function delete(Request $request)
    {
        // Validate the request
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
        ]);

        // Get the doctor ID from the request
        $doctorId = $request->input('doctor_id');

        // Delete the doctor
        $doctor = Doctors::findOrFail($doctorId);
        $doctor->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Doctor deleted successfully.');
    }
}
