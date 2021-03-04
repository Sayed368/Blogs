@extends('layouts.app')
@section('content')



    <div class="signup-form">
        <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
            @csrf

            
            <h2>Register</h2>
            {{-- <p class="hint-text">It's FREE and takes a minute.</p> --}}
            

            <div class="form-group">
                {{-- <label for="username">mvfsjshf</label> --}}
                <input type="text" class="form-control 
                @error('name')
                border-danger
                border-2
                @enderror" 
                value="{{old('name')}}"
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
                value="{{old('username')}}"
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
                value="{{old('email')}}"
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
                value="{{old('avatar')}}"

                name="avatar" placeholder="Profile Pic" >
            
                @error('avatar')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
            </div>   

            
            {{-- <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div> --}}
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Register Now</button>
            </div>
            <div class="text-center">Already have an account? <a href="{{route('login')}}">Sign in</a>
        </form>
        
    </div>
    </div>
 


    
@endsection