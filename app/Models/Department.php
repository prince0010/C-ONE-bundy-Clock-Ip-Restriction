<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'dept_name',
        'is_parent',
        // 'parent_id',
        'organization_id',
        // 'night'
    ];

    public function organization(){
        return $this->belongsTo(Organization::class, 'organization_id');
    }

    // Future Reference
    // public function department(){
    //     $org = Department::find($this->parent_id);
    //     return $org->dept_name;
    // }

    // public function array(){
    //     return Department::find('parent_id', $this->id)->pluck('id')->toArray();
    // }
    

}
