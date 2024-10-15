<?php

namespace App\Http\Controllers;

use App\Models\Employee_Personal_Details;
use Illuminate\Http\Request;

class EmployeePersonalDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee_Personal_Details $employee_Personal_Details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee_Personal_Details $employee_Personal_Details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee_Personal_Details $employee_Personal_Details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee_Personal_Details $employee_Personal_Details)
    {
        //
    }
}
