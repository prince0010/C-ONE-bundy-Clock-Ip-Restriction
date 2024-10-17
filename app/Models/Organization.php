<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_name',
        // 'parent_organization',
        // 'tax_id',
        'branch_id',
    ];


    public function department(){
        return $this->hasMany(Department::class, 'organization_id');
    }

    // Future Reference
    // public function organization(){
    //     $org = Organization::find($this->parent_organization);
    //     return $org;
    // }

    public function branch(){
        return $this->belongsTo(Branch::class, 'branch_id');
    }

}
