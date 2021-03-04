@extends('layouts.app')
@section('content')
<div class="container">
    
        
    <h2 class="text-center my-2" style="color: #57acea; ">Edit Your Post</h2>
    <div class="container form my-5">
    <form action="{{route('posts.update',$post)}}" method="post">
    @csrf
    @method('PUT')
    
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject"
    class="@error('subject')
    border-danger
    border-2
    @enderror"
    
    placeholder="Write something.." style="height:200px">{{$post->body}}</textarea>
    @error('subject')
        <div class="m-2"> <span class="text-danger">{{$message}}</span></div>
                    
    @enderror

    <input type="submit" class="bg-primary" value="Post">

    </form>



    </div>



</div>
    
@endsection