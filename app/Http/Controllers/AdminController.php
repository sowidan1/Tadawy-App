<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admins;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Admins::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string',
            ]);

            return Admins::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Admins::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $admin = Admins::find($id);

            if (!$admin) {
                return response()->json(['message' => 'Admin not found'], 404);
            }

            $admin->update($request->all());

            return response()->json(['message' => 'Admin updated successfully', 'data' => $admin]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Admins::destroy($id);
    }

    public function search(string $name)
    {
        return Admins::where('name','like','%'.$name.'%')->get();
    }
}
