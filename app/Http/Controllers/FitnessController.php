<?php

namespace App\Http\Controllers;

use App\Models\fitness;
use App\Models\Fitness_show;
use Illuminate\Http\Request;

class FitnessController extends Controller
{
    public function index()
    {
        $data = fitness::select('name', 'photo','id')->get();

        return $data;
    }

    public function byFitnessId($fitnessId)
    {
        $data = Fitness_show::where('fitness_id', $fitnessId)->get();

        return $data;
    }
}
