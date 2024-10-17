<?php

namespace App\Http\Resources;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentService {


    public function createDepartment(array $validatedData): Department
    {
       return Department::create([
        "dept_name"          => $validatedData["dept_name"],
        "is_parent"          => $validatedData["is_parent"],
        "organization_id"    => $validatedData["organization_id"],
       ]); 
    }
    
}
