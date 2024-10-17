<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'emp_status_name',
    ];

    public function employee_employment_details(){
        return $this->hasMany(EmployeeEmploymentDetails::class, 'employee_status_id');
    }
    
}
