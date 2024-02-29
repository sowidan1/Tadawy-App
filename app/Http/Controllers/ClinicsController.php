<?php

namespace App\Http\Controllers;

use App\Models\Clinics;
use App\Models\Doctors;
use Illuminate\Http\Request;

class ClinicsController extends Controller
{

    public function index()
    {
        $clinics = Clinics::select('name', 'photo')->get();

        return $clinics;
    }

    public function getClinicDetails($clinicId) {

        $clinic = Clinics::find($clinicId);

        if(!$clinic) {
          return response()->json(['error' => 'Clinic not found'], 404);
        }

        return response()->json([
          'name' => $clinic->name,
          'description' => $clinic->description,
          'photo' => $clinic->photo, //added clinic photo
          'doctors' => Doctors::where('clinic_id', $clinicId)
                            ->get([
                              'name',
                              'photo', // added doctor photo
                              'id',
                              'specialty' // added specialty
                            ])
        ]);

      }
}
