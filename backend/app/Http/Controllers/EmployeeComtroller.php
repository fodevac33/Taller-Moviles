<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeComtroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee = new Employee();

        $employee->name = $request->name; 
        $employee->position_id = $request->position_id; 
        $employee->last_name = $request->last_name ; 
        $employee->card = $request->card; 
        $employee->start_date = $request->start_date; 
        $employee->start_contract_date = $request->start_contract_date;

        $employee->save();

        return response()->json('Empleado creado exitosamente', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::find($id);

        return response()->json($employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::find($id);

        $employee->name = $request->name; 
        $employee->position_id = $request->position_id; 
        $employee->last_name = $request->last_name ; 
        $employee->card = $request->card; 
        $employee->start_date = $request->start_date; 
        $employee->start_contract_date = $request->contract_date;

        $employee->save();

        return response()->json('Empleado actualizado exitosamente', 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return response()->json('Empleado eliminado exitosamente', 201);
    }
}
