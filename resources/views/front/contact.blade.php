@extends('front.app')

@section('content')

<div class="container my-5">
    <h1 class="mb-4">Contact Us</h1>

    <form method="POST" action="{{ url('/send-message') }}" class="form row g-3">
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

        <div class="col-md-6">
           <label class="form-label">Name</label>

           <input name="name" type="text" class="form-control" placeholder="Name"  />   

        </div>


        <div class="col-md-6">
      <label class="form-label">Email</label>

      <input name="email" type="email" class="form-control" placeholder="Email" required />

        </div>


         <div class="col-12">
      <label class="form-label">Message</label>
      <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>

         </div>

         
         
         
 <div class="col-12">
      <button type="submit" class="btn btn-primary">Send Message</button>
    </div>
    </form>
</div>

@endsection
