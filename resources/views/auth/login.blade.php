@extends('layouts.app')
@section('content')



    <div class="signup-form">
        <form action="{{route('login')}}" method="post">
            @csrf

            
            <h2>Login</h2>

            
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
                <label class="checkbox-inline"><input type="checkbox" name="remember" id="remember"> Remember me . </label>
            </div>

            @if (session('status'))
            <div class="text-center p-3">
            <span class="text-danger ">{{session('status')}}</span>
             </div>
            @endif


            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
            </div>
            <div class="text-center">Don't have an account? <a href="{{route('register')}}">Sign Up</a>
        </form>
        
    </div>
    </div>
 


    
@endsection