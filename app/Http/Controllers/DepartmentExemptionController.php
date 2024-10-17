<?php

namespace App\Http\Controllers;

use App\Http\Resources\DeptExemptService;
use App\Models\DepartmentExemption;
use Illuminate\Http\Request;

class DepartmentExemptionController extends Controller
{
    protected $deptExemService;

    public function __construct(DeptExemptService $deptExemService){
        $this->deptExemService = $deptExemService;
    }
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
            'dep_ip' => 'required|string',
        ]);
        
        $dataDept = $this->deptExemService->createDeptEx($validatedData);
        
        return response()->json([
            'messsage' => 'Department Ip Exemption Added',
            'dataDept' => $dataDept
        ], 201);
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
    public function show(DepartmentExemption $departmentExemption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DepartmentExemption $departmentExemption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DepartmentExemption $departmentExemption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DepartmentExemption $departmentExemption)
    {
        //
    }
}
