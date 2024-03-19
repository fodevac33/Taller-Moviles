<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = Position::all();
        return response()->json($positions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $position = new Position();

        $position->name = $request->name; 
        $position->department_id = $request->department_id; 
        $position->hourly_rate = $request->hourly_rate; 

        $position->save();

        return response()->json('Posicion creada exitosamente', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $position = Position::find($id);

        return response()->json($position);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $position = Position::find($id);

        $position->name = $request->name; 
        $position->department_id = $request->department_id; 
        $position->hourly_rate = $request->hourly_rate; 

        $position->save();

        return response()->json('Posicion actualizada exitosamente', 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $position = Position::find($id);
        $position->delete();

        return response()->json('Posicion eliminada exitosamente', 201);
    }
}
