<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITI Blogs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('style')
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">ITI Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">Home </a>
      </li>
      

      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('posts')}}">Posts</a>
      </li>
     
    </ul>

   
    <ul class="navbar-nav ml-auto">

        {{-- @if (auth()->user())
        <li class="nav-item">
            <a class="nav-link" href="/aboutus">{{auth()->user()->name}}</a>
        </li>
       
       <li class="nav-item">
         <a class="nav-link" href="/contactus">Logout</a>
       </li>
            
        @else
        <li class="nav-item">
        <a class="nav-link" href="/aboutus">Login</a>
        </li>
        <li class="nav-item ">
         <a class="nav-link" href="{{route('register')}}">Register </a>
       </li>
        @endif --}}

        @auth
        <li class="nav-item">
            <a class="nav-link" href="#">{{auth()->user()->name}}</a>
        </li>
       
       <li class="nav-item">
         <a class="nav-link" href="{{route('logout')}}">Logout</a>
       </li>
        @endauth

        @guest
            <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item ">
             <a class="nav-link" href="{{route('register')}}">Register </a>
           </li>
            
        @endguest
      
      
     </ul>
 
  </div>
</nav>


<div>
    @yield('content')
</div>



<footer class="bg-primary text-white text-center text-lg-start  footer">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Footer Content</h5>

        <p>
        Ante amet vitae vulputate odio nulla vel pretium pulvinar aenean. Rhoncus eget adipiscing etiam arcu. Ultricies justo ipsum nec amet.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase text-left">Useful Links</h5>

        <ul class="list-unstyled mb-0 text-left">
          <li>
            <a href="#!" class="text-white">Leadereship</a>
          </li>
          <li>
            <a href="#!" class="text-white">Company</a>
          </li>
          <li>
            <a href="#!" class="text-white">Diversity</a>
          </li>
          <li>
            <a href="#!" class="text-white">Jobs</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0 text-left">information</h5>

        <ul class="list-unstyled text-left">
        <li>
            <a href="#!" class="text-white">Leadereship</a>
          </li>
          <li>
            <a href="#!" class="text-white">Company</a>
          </li>
          <li>
            <a href="#!" class="text-white">Diversity</a>
          </li>
          <li>
            <a href="#!" class="text-white">Jobs</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-white" href="#">ITI-PHP Full Stack</a>
  </div>
  <!-- Copyright -->
</footer>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>