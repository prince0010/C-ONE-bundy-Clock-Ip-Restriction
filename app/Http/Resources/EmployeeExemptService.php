<?php

namespace App\Http\Resources;

use App\Models\EmployeeExemption;
use Illuminate\Http\Request;

class EmployeeExemptService
{
    public function createEmpExem(array $validatedData) : EmployeeExemption{
            return EmployeeExemption::create([
                'emp_ip' => $validatedData['emp_ip']
            ]);
    }
}
