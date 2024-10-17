<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Personal_Details extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_number', // Just a normal string
        'first_name',
        'middle_name',
        'last_name',
        'nickname',
        'gender',
        'marital_status',
        'birthday',
        'home_address',
        'present_address',
        'ext',
        // 'pic'
        'branch_id', //foreign key to the branch_id
    ];

    public function branch(){
        
        if($this->branch_id === null || $this->branch_id === 0 || $this->branch_id === ''){
            // if($this->branch)
        }
    }

    public function fullname(){
        if($this->ext != '' || $this->ext != null){
            $fullname = $this->firstname . '' . $this->middlename . '' . $this->lastname . '' . $this->ext;
        }else{
            $fullname = $this->firstname . '' . $this->middlename . ''.  $this->lastname;
        }

        return $fullname;
    }
}

