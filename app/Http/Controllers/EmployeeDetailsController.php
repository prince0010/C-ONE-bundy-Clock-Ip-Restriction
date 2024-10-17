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

            // Employee Employment Details * Do this
            // 'years_of_experience',
            'source' => 'nullable|min:2|max:25',
            'date_hired' => 'required|date|date_format:Y-m-d',
            'contract_end_date' => 'nullable|date|date_format:Y-m-d', 
            'regularization_date' => 'nullable|date|date_format:Y-m-d',
            'employee_status_id' => 'required|min:1|max:10', 
            'exempted_from_attendance' => 'nullable|max:1', // ???
            'position_type_id' => 'required|numeric|gt:0', 
            'organization_id' => 'required|numeric|gt:0', 
            'hris_role_type_id' => 'required|numeric|gt:0',
            'department_id' => 'required|numeric|gt:0', 
            'branch_id' => 'required|numeric|gt:0', 
            // 'department_head' =>, 
            // 'probation_date',

            
            // Employee Salaray Details?

            // Employee Contact Details
            'fullname'=> 'required|max:50',
            'contact_number' => 'required|max:20',
            'address' => 'required|max:250',
            'relationship' => 'required|max:20',
        ],
        [
            'position_type_id.gt'   => 'Please Select Position Type',
            'organization_id.gt'    => 'Please Select Organization',
            'hris_role_type_id.gt'  => 'Please Select Role',
            'department_id.gt'      => 'Please Select Department',
            'branch_id.gt'          => 'Please Select Branch',
        ]
    ); 
    
    // Set Probitionary Date if the employment status is == 1(On Probation)
    if($request->employee_status() === 1){ // 1 is on_probation employee_status
      $this->validate($request, [
        'probitionary_date' => 'required|date|date_format:Y-m-d',
      ]);
    }

    // substr gina extract niya ang portion sa string based sa specific parameters, and kani na case is ang -2 which is kwaon niya ang last 2 digit sa year or ang specified na naas sulod sa substr.
    $password = date("m", strtotime($request->birthday)) . substr(date("y", strtotime($request->birthday)), -2) . substr($request->employee_number, -2);

    $employee = EmployeeDetails::create([
        'employee_number' => $request->employee_number,
        'first_name' => $request->first_name,
        'middle_name' => $request->middle_name,
        'last_name' => $request->last_name,
        'nickname' => $request->nickname,
        'gender' => $request->gender,
        'marital_status' => $request->marital_status,
        'birthday' => $request->birthday,
        'birthplace' => $request->birthplace,
        'home_address' => $request->home_address,
        'present_address' => $request->present_address,
    ]);

    // Employee Gender Male and Marital_status = married
    
    // 

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
