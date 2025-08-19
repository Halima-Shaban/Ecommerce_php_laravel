@extends('front.app')
@section('content')


<div class="container my-5">
    <div class="row g-4">
        <h1 class="mb-0">Products</h1>

        
        
        <div id="productGrid" class="row g-4">
            
            @foreach($products as $product)
    <div class="col-12 col-sm-6 col-lg-3 product" data-name="Product 1">
    <div class="card h-100 shadow-sm" style="width: 18rem;">
        <img src="{{$product->image}}" class="card-img-top" alt="Product 1">
        <div class="card-body d-flex flex-column text-center">
            <h5 class="card-title">{{$product->title}}</h5>
            <h5 class="card-title">{{$product->user->name}}</h5>
            <p class="card-text  small mb-2">{{$product->description}}</p>
            <a href="{{url('/product/' .$product->id)}}" class="btn btn-primary mt-auto ">View Product Details</a>
        </div>
        </div>



        </div>

        @endforeach
    </div>
    </div>

</div>


@endsection