@extends('front.app')
@section('content')


<div class="container ">
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{$product->image}}" class="img-fluid rounded-start" alt="..." height="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <p class="card-text">T{{$product->description}}</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated {{$product->created_at ->diffForHumans()}}</small></p>
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