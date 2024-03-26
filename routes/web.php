<?php

use App\Http\Controllers\DoctorWebController;
use App\Http\Controllers\PatientWebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateWebController;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


Route::get('/', [TemplateWebController::class,'login'])->name('login');
// Route::post('/login', [DoctorWebController::class,'doctor_login'])->name('doctor_login');
Route::get('/eroorr', [TemplateWebController::class,'eroorr'])->name('eroorr');
Route::fallback(function () {
    return redirect()->route('eroorr');
});

    Route::match(['get', 'post'], '/home', [TemplateWebController::class, 'index'])->name('dashpord');
    Route::get('/addpatient', [TemplateWebController::class,'add_patient'])->name('addpatient');
    Route::get('/adddoctor', [TemplateWebController::class,'add_doctor'])->name('addDoctor');
    Route::get('/all-patient', [TemplateWebController::class,'all_patient'])->name('All_Patient');
    Route::get('/all-doctor', [TemplateWebController::class,'all_doctor'])->name('All_Doctor');
    Route::post('/patients/delete', [PatientWebController::class, 'delete'])->name('patients.delete');
    Route::post('/doctors/delete', [DoctorWebController::class, 'delete'])->name('doctors.delete');
    Route::post('/doctors/store', [DoctorWebController::class, 'store'])->name('doctors.store');
    Route::post('/patients/store', [PatientWebController::class, 'store'])->name('patients.store');

    
