<?php

namespace App\Http\Controllers;

use App\Http\Resources\IpSuffixService;
use App\Models\IpSuffix;
use Illuminate\Http\Request;

class IpSuffixController extends Controller
{
    protected $ipSuffixService;

    public function __construct(IpSuffixService $ipSuffixService){
        $this->$ipSuffixService = $ipSuffixService;
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
            'ip_suffix' => 'required|string'
        ]);

        $ipsuffixdata = $this->ipSuffixService->createIpSuffix($validatedData);

        return response()->json([
            'data' => $ipsuffixdata,
            'message' => 'Added Ip Suffix'
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
    public function show(IpSuffix $ipSuffix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IpSuffix $ipSuffix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IpSuffix $ipSuffix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IpSuffix $ipSuffix)
    {
        //
    }
}
