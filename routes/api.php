<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClinicsController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FitnessController;
use App\Http\Controllers\InfantIncubatorController;
use App\Http\Controllers\MainTestController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\X_rayController;
use App\Models\Patients;
use App\Models\Doctors;
use App\Models\InfantIncubator;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:patientApi')->group(function(){
    Route::post('/book_test', [MainTestController::class, 'bookTest']);
    Route::post('/book/x-ray', [X_rayController::class, 'book_X_ray']);
    Route::get('/getProfile', [PatientController::class, 'getProfile']);
});

//! public routes
Route::post('/doctor-login',[DoctorController::class,'doctor_login']);
Route::post('/patient-login',[PatientController::class,'patient_login']);
Route::post('/getDataFromInfantIncubators',[InfantIncubatorController::class,'getDataFromInfantIncubators']);


//! private routes
Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::post('/logout', [AuthController::class, 'logout']);

});

//! test routes
Route::get('/x-ray-test/all', [MainTestController::class, 'index']);
Route::get('/x-ray-test/{ray_test_id}', [MainTestController::class, 'test_index']);
Route::get('/main-tests/{id}', [MainTestController::class, 'show']);
Route::get('/blood_glucoses/{id}/{patientId}', [MainTestController::class, 'getBloodGlucoseById']);
Route::get('/haematologies/{id}/{patientId}', [MainTestController::class, 'getHaematologiesById']);
Route::get('/lipid_profiles/{id}/{patientId}', [MainTestController::class, 'getLipid_profilesById']);
Route::get('/renal_profiles/{id}/{patientId}', [MainTestController::class, 'getRenal_profilesById']);
Route::get('/liver_profiles/{id}/{patientId}', [MainTestController::class, 'getLiver_profilesById']);
Route::get('/cardiac_profiles/{id}/{patientId}', [MainTestController::class, 'getCardiac_profilesById']);
Route::get('/virologies/{id}/{patientId}', [MainTestController::class, 'getVirologiesById']);
Route::get('/parasitologies/{id}/{patientId}', [MainTestController::class, 'getParasitologiesById']);
// Route::post('/book_test', [MainTestController::class, 'bookTest']);


//! X-ray routes
Route::get('/x-ray', [X_rayController::class, 'index']);
Route::get('/x-ray/{id}', [X_rayController::class, 'show']);
// Route::post('/book/x-ray', [X_rayController::class, 'book_X_ray']);


//! Fitness routes
Route::get('/fitness/all', [FitnessController::class, 'index']);
Route::get('/fitness/{fitnessId}', [FitnessController::class, 'byFitnessId']);

Route::get('/fitness-program/all', [FitnessController::class, 'index_program']);
Route::get('/fitness-program/{fitnessId}', [FitnessController::class, 'byFitnessDetailsId']);

//! clinics routes
Route::get('/clinics/all', [ClinicsController::class, 'index']);
Route::get('/clinics/{clinicId}', [ClinicsController::class, 'getClinicDetails']);

//! doctors routes
Route::get('/doctors/all', [DoctorController::class, 'index']);







// Route::resource('admin',AdminController::class);
//! public routes
// Route::get('/search/{name}', [AdminController::class, 'search']);
// Route::get('/admin', [AdminController::class, 'index']);
// Route::post('/add-admin',[AuthController::class,'add_admin']);
// Route::post('/login',[AuthController::class,'login']);


//Route::post('/admin/{id}', [AdminController::class, 'update']);

//! protected routes
// Route::group(['middleware'=>['auth:sanctum']],function(){
//     Route::get('/admin/{id}', [AdminController::class, 'show']);
//     Route::post('/logout', [AuthController::class, 'logout']);
//     Route::delete('/delete-admin/{id}', [AdminController::class, 'destroy']); // Use DELETE for deleting

// });


