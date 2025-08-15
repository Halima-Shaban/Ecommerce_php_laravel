@extends('front.app')
@section('content')


<div class="container ">
    <div class="row">
        <h1>Products</h1>

        
        @foreach($products as $product)

        <div class="col-4 mb-5">


        <div class="card" style="width: 18rem;">
        <img src="{{$product->image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <h5 class="card-title">{{$product->user->name}}</h5>
            <p class="card-text">{{$product->description}}</p>
            <a href="{{url('/product/' .$product->id)}}" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>



        </div>

        @endforeach
    </div>

</div>


@endsection