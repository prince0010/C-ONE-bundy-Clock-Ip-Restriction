<?php

namespace App\Http\Resources;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BranchService
{
    
    public function createBranch(array $validatedData): Branch
    {       
        return Branch::create([
            'branch_name' => $validatedData['branch_name'],
        ]);
    }
}
