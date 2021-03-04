<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
        

    }
    public function store(Request $request)
    {
        // dd( $request->avatar);

       //validation

       $request->validate([

        'name'=>'required|min:3',
        'username'=>'required|min:3',
        'email'=>'required|email',
        'password'=>'required|confirmed',
        'password_confirmation'=>'required',
        "avatar"=> "image|mimes:jpeg,png,jpg,gif,svg|max:2048",

       ]);

    
    if($request->hasFile('avatar')) {
        $image = $request->file('avatar');
        $filename =rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('usersimgs/'), $filename);
        $filename='usersimgs/'.$filename;
    }

    // dd($filename);
    //storeuser

       User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'username'=>$request->username,
           'password'=>Hash::make($request->password),
           "avatar"=>$filename,


       ]);
       
       //signuserin

       auth()->attempt($request->only('email','password'));
       //redirect

       return redirect()->route('dashboard');


    }
}
