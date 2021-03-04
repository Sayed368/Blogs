@extends('layouts.app')
@section('content')
<div class="container">
    
    <h2 class="text-center mt-5" style="color: #57acea; ">{{$user->name}} </h2>
    <h5 class="text-center mb-5" style="color: slategray;font-family: serif;font-size: 20px">Posted {{$posts->count()}} {{Str::plural('Post',$posts->count())}} and received {{$user->receivedLike->count()}} likes</h5>
    {{-- <p class="text-center ">{{$posts->count()}} {{Str::plural('Post',$posts->count())}}</p> --}}
    


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