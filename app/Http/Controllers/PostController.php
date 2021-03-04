<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Like;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth'])->except(['index','show']);
        $this->middleware(['auth'])->only(['store','destroy']);
    }
    public function index(){
        // $posts=Post::all();
        // $posts=Post::paginate(10);
        $posts=Post::orderBy('created_at','desc')->with(['user','likes'])->paginate(10);

        return view('posts.index',['posts'=>$posts]);

    }
    public function topRated()
    {
        // $likes=Like::all();
        // $likes= $likes->groupBy('post')->orderBy($likes->count(),'desc');
        // dd($likes);
        // $posts=Post::with(['user','likes'])->orderBy(count(likes),'desc')->paginate(10);
        // dd($posts);
        return view('posts.home');
    }

    
    public function show(Post $post)
    {
        // dd($post);
        return view('posts.show',['posts'=>$post]);
    }


    public function store(Request $request)
    {
        // dd( $request);

       //validation

       $request->validate([

        'subject'=>'required|min:10',
       ]);

       //storeuser

       $request->user()->post()->create([
        'body'=>$request->subject

       ]);
    //    Post::create([
    //        'body'=>$request->subject,
    //        'user_id'=>auth()->id(),
           
    //    ]);
       
    //    dd(auth()->user()->post);


       return redirect()->back();


    }

    public function edit(Post $post){
        
    
       
        return view('posts.edit',['post'=>$post]);
    }

    public function update(Request $request,Post $post){
        
    
        $request->validate([

            'subject'=>'required|min:10',
           ]);
       
           $post->update([
            'body'=>$request->subject
           ]);
        return redirect(route('dashboard'));
    }

    public function destroy(Post $post){

        $this->authorize('delete',$post);
        $post->delete();

        return back();
    }
}

