<?php

namespace App\Http\Resources;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchService
{
    public function createBranch(array $validateData) : Branch {
            return Branch::create([
                'branch_name' => $validateData['branch_name'],
            ]);
    }
}
