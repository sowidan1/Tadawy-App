<?php

namespace App\Http\Controllers;
use App\Models\blood_glucose;
use App\Models\book_test;
use App\Models\cardiac_profile;
use App\Models\Haematology;
use App\Models\lipid_profile;
use App\Models\liver_profile;
use App\Models\Main_test;  // Make sure the correct namespace is used
use App\Models\parasitology;
use App\Models\Ray_test;
use App\Models\renal_profile;
use App\Models\virology;
use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainTestController extends Controller
{

    public function __construct() {
        $this->middleware('permission:bookTest')->only('bookTest');
    }

    public function show($id)
{
    $mainTest = Main_test::with('haematologies', 'blood_glucoses', 'lipid_profiles', 'renal_profiles', 'liver_profiles', 'cardiac_profiles', 'virologies', 'parasitologies')
        ->find($id);

    if (!$mainTest) {
        return response()->json(['message' => 'Main test not found'], 404);
    }

    $response = [];

    $relationships = ['haematologies', 'blood_glucoses', 'lipid_profiles', 'renal_profiles', 'liver_profiles', 'cardiac_profiles', 'virologies', 'parasitologies'];

    foreach ($relationships as $relationship) {
        if (!$mainTest->$relationship->isEmpty()) {
            $response[$relationship] = $mainTest->$relationship->toArray();
        }
    }

    return response()->json($response, 200);
}

public function index()
{
    $Ray_tests = Ray_test::select('name', 'id')->get();

    return $Ray_tests;
}

public function test_index($ray_test_id)
{

    $data = DB::table('ray_tests')
        ->join('main_tests', 'main_tests.ray_test_id', '=', 'ray_tests.id')
        ->where('ray_tests.id', $ray_test_id)
        ->get();

    return $data;
}

public function bookTest(Request $request){
        $fields = $request->validate([
        'table_name'=> 'required|string',
        'test_name'=> 'required',
        'test_id'=> 'required',
        'location'=>'nullable|string',
        'price'=>'numeric|min:0',
        'date' => 'required|date_format:Y-m-d',
        'time' => 'required|date_format:H:i:s',
        'visit_type'=>'required|in:lab,home',
        'patient_id'=>'required|exists:patients,id',
        ]);

        $mainTest = book_test::create($fields);

        return response($mainTest, 201);
}

function getBloodGlucoseById($id, $patientId) {

    $tableName = 'blood_glucose';

    $patient = Patients::find($patientId);

    $bloodGlucoseRecord = blood_glucose::find($id);

    $result = [
        'table_name' => $tableName,
        'record' => $bloodGlucoseRecord,
        'patient_name' => $patient->name
    ];

    return $result;

}

function getHaematologiesById($id, $patientId) {

    $tableName = 'haematology';

    $patient = Patients::find($patientId);

    $haematologiesRecord = Haematology::find($id);

    $result = [
        'table_name' => $tableName,
        'record' => $haematologiesRecord,
        'patient_name' => $patient->name
    ];

    return $result;

}

function getLipid_profilesById($id, $patientId) {

    $tableName = 'lipid_profile';

    $lipid_profilesRecord = lipid_profile::find($id);

    $patient = Patients::find($patientId);

    $result = [
        'table_name' => $tableName,
        'record' => $lipid_profilesRecord,
        'patient_name' => $patient->name

    ];

    return $result;
}

function getRenal_profilesById($id, $patientId) {

    $tableName = 'renal_profile';

    $renal_profilesRecord = renal_profile::find($id);

    $patient = Patients::find($patientId);
    $result = [
        'table_name' => $tableName,
        'record' => $renal_profilesRecord,
        'patient_name' => $patient->name
    ];

    return $result;

}

function getLiver_profilesById($id, $patientId) {

    $tableName = 'liver_profile';

    $patient = Patients::find($patientId);
    $liver_profilesRecord = liver_profile::find($id);

    $result = [
        'table_name' => $tableName,
        'record' => $liver_profilesRecord,
        'patient_name' => $patient->name
    ];

    return $result;
}

function getCardiac_profilesById($id,$patientId) {

    $tableName = 'cardiac_profile';

    $patient = Patients::find($patientId);

    $cardiac_profilesRecord = cardiac_profile::find($id);

    $result = [
        'table_name' => $tableName,
        'record' => $cardiac_profilesRecord,
        'patient_name' => $patient->name
    ];

    return $result;
}

function getVirologiesById($id,$patientId) {

        $tableName = 'virology';

        $virologiesRecord = virology::find($id);
        $patient = Patients::find($patientId);

        $result = [
            'table_name' => $tableName,
            'record' => $virologiesRecord,
            'patient_name' => $patient->name
        ];

        return $result;
}

function getParasitologiesById($id,$patientId) {

    $tableName = 'parasitology';

    $patient = Patients::find($patientId);

    $parasitologiesRecord = parasitology::find($id);

    $result = [
        'table_name' => $tableName,
        'record' => $parasitologiesRecord,
        'patient_name' => $patient->name
    ];

    return $result;
}
}

