<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_personal_id',
        'employee_number',
        'password',
    ];

    public function employee_personal_details(){
        return $this->belongsTo(EmployeeDetails::class, 'employee_personal_id');
    }
}
