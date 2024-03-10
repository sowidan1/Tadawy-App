<?php

namespace App\Http\Controllers;

use App\Models\fitness;
use App\Models\Fitness_program;
use App\Models\Fitness_program_details;
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

    public function index_program()
    {
        $data = Fitness_program::select('name', 'photo','id')->get();

        return $data;
    }

    public function byFitnessDetailsId($fitnessId)
    {
        $data = Fitness_program_details::where('fitness_program_id', $fitnessId)->get();

        return $data;
    }
}
