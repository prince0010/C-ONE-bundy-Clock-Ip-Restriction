<?php

namespace App\Http\Controllers;

use App\Http\Resources\DepartmentService;
use App\Models\Department;
use App\Models\Organization;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // protected $departmentService;

    // public function __construct(DepartmentService $departmentService){
    //     $this->departmentService = $departmentService;
    // }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validateData = $request->validate([
            'dept_name' => 'string|max:255',
            'organization_id' => 'required',
            'is_parent'=> 'nullable',
        ]);

        $check_organization = Organization::find($validateData['organization_id']);
        
        foreach($check_organization->department as $department){
            if($department->dept_name == $validateData['dept_name']){
                return response()->json([
                    'message' => 'Department Already Exist on this Organization.
                                  (Nag Exist nani nga department nga organization.)'
                ], 400);
            }
        }

        // $this->departmentService->createDepartment(
        //     $validateData, 
        // ); 

        Department::create([
            'dept_name' => $validateData['dept_name'],
            'organization_id'=> $validateData['organization_id'],
            'is_parent'=> $validateData['is_parent'],
        ]);

        return response()->json([
          'message' => 'Department successfully created.
            (Na record na ang department salamat)'
        ], 200);

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
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
