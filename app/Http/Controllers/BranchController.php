<?php

namespace App\Http\Controllers;

use App\Http\Resources\BranchService;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    protected $branchService;

    public function __construct(BranchService $branchService){
        $this->branchService = $branchService;
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
        try{
             $validatedData = $request->validate([
            'branch_name' => 'required|string|max:50',
        ]);

        $branchData = $this->branchService->createBranch($validatedData);

        return response()->json([
            'messsage' => 'Branch Added',
            'branch' => $branchData
        ], 201);

        }
        catch(\Exception $e){

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
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branch $branch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        //
    }
}
