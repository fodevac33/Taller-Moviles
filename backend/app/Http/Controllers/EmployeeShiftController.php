<?php

namespace App\Http\Controllers;

use App\Models\EmployeeShift;
use Illuminate\Http\Request;

class EmployeeShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee_shifts = EmployeeShift::all();
        return response()->json($employee_shifts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee_shift = new EmployeeShift();

        $employee_shift->shift_start = $request->shift_start; 
        $employee_shift->shift_end = $request->shift_end; 
        $employee_shift->employee_id = $request->employee_id; 

        $employee_shift->save();

        return response()->json('Horario creado exitosamente', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee_shift = EmployeeShift::find($id);

        return response()->json($employee_shift);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee_shift = EmployeeShift::find($id);

        $employee_shift->shift_start = $request->shift_start; 
        $employee_shift->shift_end = $request->shift_end; 
        $employee_shift->employee_id = $request->employee_id; 

        $employee_shift->save();

        return response()->json('Horario actualizado exitosamente', 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee_shift = EmployeeShift::find($id);
        $employee_shift->delete();

        return response()->json('Horario eliminadp exitosamente', 201);
    }
}
