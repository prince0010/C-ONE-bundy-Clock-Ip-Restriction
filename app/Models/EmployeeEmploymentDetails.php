<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeEmploymentDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_personal_id',
        'years_of_experience',
        'source',
        'date_hired',
        'employee_status_id', //Employee Status Table*
        'contract_end_date', 
        'position_type_id', // Position Tyle Table *
        'hris_role_type_id', // Hris Role Type Table *
        'department_head', 
        'regularization_date',
        'probation_date',
        // 'include',
        // 'sheet_additional',
    ];

    public function employee_personal_details(){
        return $this->belongsTo(EmployeeDetails::class, 'employee_personal_id');
    }

    public function hris_role_types(){
        return $this->belongsTo(HRISRoleTypes::class, 'hris_role_type_id');
    }

    // 
    // public function last_position(){
    //     $position = PositionFullfillment::where('employee_personal_id', $this->id)->latest()->first();
    //     $position_type = null;
    //     if($position){
    //         $position_type = $position->position_type;
    //     }

    //     return $position_type;
    // }

     public function position_type(){
            return $this->belongsTo(PositionType::class, 'position_type_id');
     }


    public function hris_role_type_type(){
        return $this->belongsTo(HRISRoleTypes::class, 'hris_role_type_id');
    }


    public function employee_status(){
        return $this->belongsTo(EmployeeStatus::class, 'employee_status_id');
    }
}
