<?php

namespace App\Http\Resources;

use App\Models\HRISRoleTypes;
use Illuminate\Http\Request;

class HRISTypeSerivce
{   

    public function createHrisRole(array $validatedData): HRISRoleTypes{
        return HRISRoleTypes::create(
            [
                "role_type_name" => $validatedData['role_type_name'],
            ]
        );
    }
    
}
