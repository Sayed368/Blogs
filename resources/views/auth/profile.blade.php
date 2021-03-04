@extends('layouts.app')
@section('content')



    <div class="signup-form">
        <form action="{{route('user.update',$user)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            
            <h2>Update your Profile</h2>
           
            

            <div class="form-group">
                
                <input type="text" class="form-control 
                @error('name')
                border-danger
                border-2
                @enderror" 
                value="{{$user->name}}"
                name="name" placeholder="Name" >

                @error('name')
                <span class="text-danger ">{{$message}}</span>
                    
                @enderror
            </div>
            <div class="form-group">
                {{-- <label for="username">mvfsjshf</label> --}}
                <input type="text" class="form-control
                @error('username')
                border-danger
                border-2
                @enderror"
                value="{{$user->username}}"
                name="username" placeholder="User Name" >
                @error('username')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control
                @error('email')
                border-danger
                border-2
                @enderror"
                value="{{$user->email}}"
                name="email" placeholder="Email" >
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
                
            </div>
            <div class="form-group">
                <input type="password" class="form-control
                @error('password')
                border-danger
                border-2
                @enderror"
                name="password" placeholder="Password" >
                @error('password')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control
                @error('password_confirmation')
                border-danger
                border-2
                @enderror" 
                
                name="password_confirmation" placeholder="Confirm Password" >
            
                @error('password_confirmation')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
            </div>   
            
            <div class="form-group">

               
                <input type="file" class="form-control
                @error('avatar')
                border-danger
                border-2
                @enderror" 
                value="{{$user->avatar}}"

                name="avatar" placeholder="Profile Pic" >
            
                @error('avatar')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
            </div>   

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
            </div>
            
        </form>
        
    </div>
    </div>
 


    
@endsection