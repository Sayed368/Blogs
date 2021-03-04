@extends('layouts.app')
@section('content')
<div class="container">
    
        
    <h2 class="text-center my-2" style="color: #57acea; ">Write Your Post</h2>
    <div class="container form my-5">
    <form action="{{route('posts')}}" method="post">
    @csrf
    {{-- 
    <label for="title">Post Title</label>
    <input type="text" id="title" name="title" placeholder="Post Title...">
    <label class="text-danger" for="title">{{$errors->first("title")}}</label></br> --}}

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject"
    class="@error('subject')
    border-danger
    border-2
    @enderror"
    
    placeholder="Write something.." style="height:200px">@error('subject') {{old('subject')}}  @enderror</textarea>
    @error('subject')
        <div class="m-2"> <span class="text-danger">{{$message}}</span></div>
                    
    @enderror

    <input type="submit" class="bg-primary" value="Post">

    </form>



    </div>




@if ($posts->count())
    @foreach ($posts as $post)
        <x-Post :post='$post'/>
        
    @endforeach

    <div class="row justify-content-center m-5">{{ $posts->links() }}</div>

    
@else

    <h2 class="text-center my-2" style="color: #57acea; ">No Posts Found</h2>
    
@endif




</div>
    
@endsection