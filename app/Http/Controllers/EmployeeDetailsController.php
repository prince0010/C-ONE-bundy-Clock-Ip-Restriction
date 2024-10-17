<?php

namespace App\Http\Controllers;

use App\Models\EmployeeDetails;
use Illuminate\Http\Request;

class EmployeeDetailsController extends Controller
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
        
        // If Creating a EmployeeDetails include its userLogin - employee_personal_detail_id, username, password

        $this->validate($request, [

            // Employee Details
            'employee_number' => 'min:5|max:10|unique:employee_personal_details,employee_number',
            'first_name' => 'required|max:50',
            'middle_name' => 'max:50',
            'last_name' => 'required|max:50',
            'nickname' => 'max:50',
            'gender' => 'nullable|min:3|max:6',
            'marital_status' => 'max:10',
            'birthday' => 'required|date',
            'birthplace' => 'required|max:255',
            'home_address' => 'required|max:255',
            'present_address' => 'required|max:255',


            // Employee Employment Details ?

            
            // Employee Salaray Details?


            // Employee Contact Details
            'fullname'=> 'required|max:50',
            'contact_number' => 'required|max:20',
            'address' => 'required|max:250',
            'relationship' => 'required|max:20',
            
        ],
        [

        ]
    ); 
    
    // Set Probitionary Date if the employment status is == 1(On Probation)
    if($request->employee_status() === 1){
      $this->validate($request, [
        'probitionary_date' => 'required|date|date_format:Y-m-d',
      ]);
    }


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
    public function show(EmployeeDetails $employeeDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeDetails $employeeDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeeDetails $employeeDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeDetails $employeeDetails)
    {
        //
    }
}
