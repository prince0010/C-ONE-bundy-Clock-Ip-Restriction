<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HRISRoleTypes extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_type_name'
    ];

    public function employee_employment_details(){
        return $this->hasMany(EmployeeEmploymentDetails::class, 'hris_role_type_id');
    }
}
