<?php

namespace App\Http\Controllers;

use App\Http\Resources\BranchService;
use App\Models\Branch;
use App\Models\Organization;
use DB;
use Illuminate\Http\Request;

class BranchController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

     
    public function create(Request $request)
    {
             $validatedData = $request->validate([
            'branch_name' => 'required|unique:branches',
             ]);

            Branch::create([
                'branch_name' => $validatedData['branch_name'],
            ]);

            return response()->json([
                'message' => 'Branch Successfully Created
                                (Nahimo na ang branch Salamat)',
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
    public function destroy(Request $request, $id)
    {

        $organization = Organization::where('branch_id', $request->id)->get();
        foreach ($organization as $org){
            // if($request->branch_id != null){
            //     $org->branch_id = $request->branch_id;
            // }else{
            //     $org->branch_id = null;
            // }
            $org->branch_id = ($request->branch_id != null) ? $request->branch_id : null;
            $org->save();
        }
        // Looking at the Id of the User that is doing the delete
        $branch = Branch::find($request->id);
        $branch->delete();

        return response()->json([
            'message' => 'Branch successfully deleted!
            (Na delete na ang branch salamat)'
        ], 200);

    }

    public function deleteWarning($id){

        $branch = DB::table('branches')->whereNot('id', $id)->get();

        return response()->json([
            'branches' => $branch,
        ], 200);
    }

    // public function getBranchEmployees(){

    // }


}
