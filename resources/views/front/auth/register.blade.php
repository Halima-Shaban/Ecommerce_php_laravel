@extends('front.app')

@section('content')

<main class="container my-5" style="max-width: 520px;">
  <h2 class="text-center mb-4">Create an Account</h2>

    <form method="POST" action="{{ route('auth.createNewUser') }}" class="form">
        @csrf
        
       

        @if(session('success')!=null)

         <div class="alert alert-success p-1">
            {{session('success')}}
        </div>



        @endif

        <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input name="name" type="text" class="form-control" placeholder="name"  />
        @error('name')
        <div class="alert alert-danger  p-1">{{$message}}</div>

        @enderror
        </div>
   <div class="mb-3">
      <label class="form-label" for="email">Email</label>
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

        


    <button type="submit" class="btn btn-success w-100">Register</button>
    </form>

  <p class="mt-3 text-center">Already have an account? <a href="login.html">Login</a></p>

</main>

@endsection
