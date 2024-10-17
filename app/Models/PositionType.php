<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'parent_id', 
        'department_id',
        'is_parent',
        'approval_level'
    ];

    public function position_fullfillment(){
        return $this->hasOne(PositionFullfillment::class, 'position_type_id');
    }

    public function employee_employment_details(){
        return $this->hasOne(EmployeeEmploymentDetails::class, 'position_type_id');
    }

    

}
