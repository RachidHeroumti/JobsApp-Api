<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Register
    public function Register(Request $request){

        $user=$request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            
        ]);

       $user =User::create($user);
        return $user;

    }
     //login
     public function Login(Request $request){

 $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return "login successfuly :";
        }
 
        return  'The provided credentials do not match our records.';
    }  
     } 

