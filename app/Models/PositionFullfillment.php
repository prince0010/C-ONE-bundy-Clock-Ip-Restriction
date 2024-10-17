<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionFullfillment extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'employee_personal_id',
        'position_type_id',
        'from_date',
        'to_date',
    ];

    public function employee_personal_details(){
        return $this->belongsTo(EmployeeDetails::class, 'employee_personal_id');
    }

    public function position_type(){
        return $this->belongsTo(PositionType::class, 'position_type_id');
    }


}
