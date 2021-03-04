<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');

    }

    public function store(Request $request){

        // dd($request->remember);

        $request->validate([

            
            'email'=>'required|email',
            'password'=>'required',
        ]);

       if(! auth()->attempt($request->only('email','password'),$request->remember))
       {
        return back()->with('status','Invalid Email or Password');


       }
        return redirect()->route('dashboard');
        

    }
}

