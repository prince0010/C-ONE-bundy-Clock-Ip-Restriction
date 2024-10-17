<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentExemption extends Model
{
    use HasFactory;

    protected $fillable = [
        'dep_ip',
    ];
}
