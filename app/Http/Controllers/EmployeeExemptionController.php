<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeExemptService;
use App\Models\EmployeeExemption;
use Illuminate\Http\Request;

class EmployeeExemptionController extends Controller
{
    protected $empExmpt;

    public function __construct(EmployeeExemptService $empExmpt){
        $this->empExmpt = $empExmpt;
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
        $validatedData = $request->validated([
            'emp_id' => 'required|string',
        ]);

        $dataEmpExemp = $this->empExmpt->createEmpExem($validatedData);

        return response()->json([
            'message' => 'Employee Exem Ip Added'
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
    public function show(EmployeeExemption $employeeExemption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeExemption $employeeExemption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeeExemption $employeeExemption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeExemption $employeeExemption)
    {
        //
    }
}
