@extends('front.app')

@section('content')

<div class="container">
    <h1 class="text-center text-light mt-5">Login Page</h1>

    <form method="POST" action="{{ route('auth.createNewUser') }}" class="form">
        @csrf
        
       

        @if(session('success')!=null)

         <div class="alert alert-success p-1">
            {{session('success')}}
        </div>



        @endif

        <div>
            <label for="name">Name</label>
            <input name="name" type="text" class="feedback-input" placeholder="name"  />
        @error('name')
        <div class="alert alert-danger  p-1">{{$message}}</div>

        @enderror
        </div>
        <div>
            <label for="email">email</label>
            <input name="email" type="email" class="feedback-input" placeholder="Email"  />
        @error('email')
        <div class="alert alert-danger  p-1">{{$message}}</div>

        @enderror
        </div>


        <div>
            <label for="password">password</label>
            <input name="password" type="password" class="feedback-input" placeholder="password"  />
              @error('password')
            <div class="alert alert-danger m-1 p-1">{{$message}}</div>
    
            @enderror
        </div>

        


        <input class="mt-1" type="submit" value="SUBMIT"/>
    </form>
</div>

@endsection
