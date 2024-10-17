<?php

namespace App\Http\Controllers;

use App\Http\Resources\HRISTypeSerivce;
use App\Models\HRISRoleTypes;
use Illuminate\Http\Request;

class HRISRoleTypesController extends Controller
{

    protected $hRISTypeSerivce;

    public function __construct(HRISTypeSerivce $hRISTypeSerivce){
        $this->hRISTypeSerivce = $hRISTypeSerivce;
    }
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
            'role_type_name' => "string|nullable",
        ]);

        $this->hRISTypeSerivce->createHrisRole($validatedData);

        return response()->json([
            "message"=> "Created HRIS ROLE TYPE",
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
    public function show(HRISRoleTypes $hRISRoleTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HRISRoleTypes $hRISRoleTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HRISRoleTypes $hRISRoleTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HRISRoleTypes $hRISRoleTypes)
    {
        //
    }
}
