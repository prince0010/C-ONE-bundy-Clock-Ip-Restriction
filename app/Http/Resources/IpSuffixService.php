<?php

namespace App\Http\Resources;

use App\Models\IpSuffix;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IpSuffixService
{

    public function createIpSuffix(array $validatedData) : IpSuffix {
        return IpSuffix::create([
            'ip_suffix' => $validatedData['ip_suffix']
        ]);
    }
  
}
