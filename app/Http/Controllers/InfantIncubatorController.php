<?php

namespace App\Http\Controllers;

use App\Http\Requests\getDataFromInfantIncubatorsRequest;
use App\Models\InfantIncubator;
use Illuminate\Http\Request;

class InfantIncubatorController extends Controller
{
    public function getDataFromInfantIncubators(getDataFromInfantIncubatorsRequest $request)
    {
        $validatedData = $request->validated();
        $data = InfantIncubator::create($validatedData);

        return response()->json([

            'message' => 'Data inserted successfully',
            'data' => ['Data' => $data],
            'status' => true,
            'code' => 200
        ], 200);
    }
}
