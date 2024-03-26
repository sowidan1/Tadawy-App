<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Patients;
use Illuminate\Http\Request;

class PatientWebController extends Controller
{
    
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'Full_Name' => 'required|string',
            'photo' => 'nullable', // Typo here, should be 'photo'
            'email' => 'required|email|unique:patients,email',
            'password' => 'required|string',
            'phoneNumber' => 'required|string',
            'medical_history' => 'string',
            'emergency_contact' => 'required|string',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required|date',
        ]);

        // Create a new Doctor instance
        Patients::create([
            'name' => $request->input('Full_Name'),
            'photo  ' => $request->photo,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phoneNumber,
            'medical_history' => $request->medical_history,
            'emergency_contact' => $request->emergency_contact,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender
        ]);

        return redirect()->back()->with('success', 'Your form has been submitted successfully!');
    }

    public function delete(Request $request)
    {
        // Validate the request
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
        ]);

        // Get the patient ID from the request
        $patientId = $request->input('patient_id');

        // Delete the patient
        $patient = Patients::findOrFail($patientId);
        $patient->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Patient deleted successfully.');
    }
}
