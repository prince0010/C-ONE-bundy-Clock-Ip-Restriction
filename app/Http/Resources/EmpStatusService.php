<?php

namespace App\Http\Resources;

use App\Models\EmployeeStatus;
use Illuminate\Http\Request;

class EmpStatusService
{
 
    public function createEmpStatus(array $validatedData): EmployeeStatus{
            return EmployeeStatus::create([
                "emp_status_name"=> $validatedData["emp_status_name"],
            ]);
    }
}
