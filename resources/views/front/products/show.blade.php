@extends('front.app')
@section('content')


<div class="container my-5 ">

    {{-- Singel Product --}}
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-5 bg-light d-flex align-items-center">
                        <img src="{{$product->image}}" class="img-fluid p-3 rounded" alt="{{ $product->title }}" >
                    </div>
                    <div class="col-md-7">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold">{{$product->title}}</h5>
                            <p class="card-text text-muted my-3">T{{$product->description}}</p>
                            <p  class="text-secondary mb-4"><small class="s">Last updated {{$product->created_at ->diffForHumans()}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
    
    
        </div>

    </div>

    <div class="row">
        <h1>Related Products</h1>

        @foreach($products as $product)
        <div class="col-4 mb-5">


        <div class="card" style="width: 18rem;">
        <img src="{{$product->image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{$product->description}}</p>
            <a href="{{url('/product/' .$product->id)}}" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>



        </div>

        @endforeach
    </div>

</div>


@endsection