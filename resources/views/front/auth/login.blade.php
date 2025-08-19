@extends('front.app')

@section('content')

<div class="container my-5" style="max-width: 520px;">
    <h1 class="text-center text-dark mb-4">Login Page</h1>

    <form method="POST" action="{{ route('auth.login') }}" class="form">
        @csrf
        
       

        @if(session('success')!=null)

         <div class="alert alert-success p-1">
            {{session('success')}}
        </div>



        @endif

        <div class="mb-3">
            <label class="form-label" for="email">email</label>
            <input name="email" type="email" class="form-control" placeholder="Email"  />
        @error('email')
        <div class="alert alert-danger  p-1">{{$message}}</div>

        @enderror
        </div>


        <div class="mb-3">
            <label class="form-label" for="password">password</label>
            <input name="password" type="password" class="form-control" placeholder="password"  />
              @error('password')
            <div class="alert alert-danger m-1 p-1">{{$message}}</div>
    
            @enderror
        </div>

        


    <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>

      <p class="mt-3 text-center">Don't have an account? <a href="register.html">Register</a></p>

</div>

@endsection
