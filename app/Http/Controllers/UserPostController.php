<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
class UserPostController extends Controller
{
    public function index(User $user)
    {
        // dd($user->post);
        $posts=$user->post()->with(['user','likes'])->paginate(10);
        // dd($posts);
        return view('users.posts.index',['posts'=>$posts,'user'=>$user]);


    }
}
