<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PostLiked;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Post;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);

    }

    public function index(){
        // dd(auth()->user());

        $user=auth()->user();
        $posts=$user->post()->with(['user','likes'])->paginate(10);
        // dd($posts);
        return view('dashboard',['posts'=>$posts,'user'=>$user]);

       
        // return view('dashboard');
    }

    
}
