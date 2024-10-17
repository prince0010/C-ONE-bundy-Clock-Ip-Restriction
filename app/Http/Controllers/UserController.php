<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

    }

    public function create(Request $request)
    {
        
        $validateData = $request->validate([
            
        ]);

        
    }
}
