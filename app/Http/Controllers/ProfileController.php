<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);

    }

    public function edit(User $user)
    {
        return view("auth.profile",['user'=>$user]);
    }
    public function update(User $user,Request $request)
    {
        // dd($request->avatar);
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

            $user->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'username'=>$request->username,
                'password'=>Hash::make($request->password),
                "avatar"=>$filename,
     
     
            ]);
        }
        else{

            $user->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'username'=>$request->username,
                'password'=>Hash::make($request->password),
                
     
     
            ]);

        }


        return redirect("dashboard");
    }
}
