<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Validator;

class RegisterController extends Controller
{
    
    public function validator(array $data){
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email'=> ['required', 'string','email', 'max:255', 'unique:users'],
            'password'=> ['required', 'string','min:8', 'confirmed'],
        ]);
    }

    // Create a new user after a valid registration.
    public function create(Request $request, array $data){
        
        return User::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=> Hash::make($data['password']),
        ]);
    }
}
