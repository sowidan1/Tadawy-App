<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRegisterRequest;
use App\Models\Admins;
use App\Models\Clinic;
use App\Models\Clinics;
use App\Models\Doctor;
use App\Models\Doctors;
use App\Models\Patient;
use App\Models\Patients;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class TemplateWebController extends Controller
{


    public function login(){
        return view('login');
    }


    public function index(){
        return view('master');
    }

    public function add_doctor(){
        $clinics = Clinics::all();
        return view('addDoctor', compact('clinics'));
    }

    public function add_patient(){
        return view('addpatient');
    }

    public function all_patient(){
        $patients = Patients::all();
        return view('allPatient',compact('patients'));
    }

    public function all_doctor(){
        $doctors = Doctors::all();
        return view('allDoctor',compact('doctors'));
    }

    public function eroorr(){
        return view('erroor');
    }

}

