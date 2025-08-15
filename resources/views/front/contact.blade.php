@extends('front.app')

@section('content')

<div class="container">
    <h1 class="text-center text-light mt-5">Contact Us</h1>

    <form method="POST" action="{{ url('/send-message') }}" class="form">
        @csrf
        
        @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger p-1">
            {{$error}}
        </div>


        @endforeach


        @endif

        @if(session('success')!=null)

         <div class="alert alert-success p-1">
            {{session('success')}}
        </div>



        @endif
        <input name="name" type="text" class="feedback-input" placeholder="Name"  />   

        <input name="email" type="email" class="feedback-input" placeholder="Email" required />

        <textarea name="message" class="feedback-input" placeholder="Your Message" required></textarea>

        <input type="submit" value="SUBMIT"/>
    </form>
</div>

@endsection
