<?php

namespace App\Http\Controllers;

use App\Models\book_X_ray;
use Carbon\Carbon;
use App\Models\X_Ray;
use Illuminate\Http\Request;

class X_rayController extends Controller
{

    public function __construct() {
        $this->middleware('permission:book_X_ray')->only('book_X_ray');
    }
    public function index()
{
        return X_Ray::all();
}

public function show($id)
{
    $tableName = 'x_ray';
    $currentDate = Carbon::now()->format('l, F j, Y');
    return [
        'x_ray' => X_Ray::find($id),
        'created_at' => $currentDate,
        'table_name' => $tableName,
    ];

}

public function book_X_ray(Request $request)
{
    $request->validate([
        'table_name'=> 'required|string',
        'x_ray_name'=> 'required',
        'x_ray_id'=> 'required',
        'price'=>'numeric|min:0',
        'date' => 'required|date_format:Y-m-d',
        'time' => 'required|date_format:H:i:s',
        'patient_id'=>'required|exists:patients,id',
    ]);

    return book_X_ray::create($request->all());

}
}
