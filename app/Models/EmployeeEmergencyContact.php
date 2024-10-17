<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeEmergencyContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_personal_id',
        'fullname',  // == employee_personal_detail()->fullname()
        'contact_number',
        'address',
        'relationship'
    ];


    public function employee_personal_detail(){
        return $this->belongsTo(EmployeeDetails::class, 'employee_personal_id');
    }
}
