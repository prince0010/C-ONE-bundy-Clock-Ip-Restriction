<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpSuffix extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_suffix',
    ];

    

}

$ip = $request->ip();
// $message = $this->birthdayCheck($request);


