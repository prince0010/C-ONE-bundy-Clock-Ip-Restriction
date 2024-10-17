<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_number',
        'first_name',
        'middle_name',
        'last_name',
        'nickname',
        'gender',
        'marital_status',
        'birthday',
        'birthplace',
        'home_address',
        'ext',
        'present_address',
        'branch_id'
    ];

    public function user_login(){
        return $this->hasOne(UserLogin::class);
    }

    public function branch(){
        // return $this->
        if($this->branch_id == null || $this->branch_id == '' || $this->branch == 0 ){ 
            if($this->employee_employment_details->position_type != null ){
                return $this->employee_employment_details->position_type->branch_id;
            }
        }else{
            return $this->branch_id;
        }

    }

    public function fullname(){
        if($this->ext != null && $this->ext != '')
        {
            $fullname = $this->firstname . '' . $this->middlename . '' . $this->lastname . '' . $this->ext;
        }
        else{
            $fullname = $this->firstname . '' . $this->middlename . '' . $this->lastname;
        }

        return $fullname;
    }
    
    // Get the Last Position of the Employee
    public function last_position(){
        $position = PositionFullfillment::where('employee_personal_id', $this->id)->latest()->first();
        $position_type = '';

        if($position){
            $position_type = $position->position_type; //PositionFullfillment Table -> position_type() method
        }
        return $position_type;
    }

    // For the BundyClock Department_id in the BundyClockController Later
    public function full_branch(){
        // return $this->employee_employment_details->position_type->branch_id;

        if($this->branch_id == '' || $this->branch_id == 0 || $this->branch_id == null){
            if($this->employee_employment_details->position_type != null){
                return $this->employee_employment_details->position_type->department->organization->branch;
            } else{
                return $this->last_position()->department->organization->branch;
            }
        }
        else{ // Else everything is false then find the branch or full branch based on the branch Id in the Branch Data Table
            return Branch::find($this->branch_id);
        }
    }

    public function employee_emergency_contact(){
        return $this->hasOne(EmployeeEmergencyContact::class, 'employee_personal_id');
    }

    public function employee_employment_details(){
        return $this->hasOne(EmployeeEmploymentDetails::class,'employee_personal_id');
    }

public function position_fullfillment(){
        return $this->hasOne(PositionFullfillment::class, 'employee_personal_id');
    }


    }

