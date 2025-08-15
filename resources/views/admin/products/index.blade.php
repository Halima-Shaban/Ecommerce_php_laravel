@extends('front.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            @if(session('success') != null)
            {{ session('success') }}
            @endif
            <h1>All Products</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$product->title}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->code}}</td>
                        <td>{{\Str::limit($product->description)}}</td>
                        <td>
                            <a href="{{route('admin-products.edit',$product->id)}}" class="btn btn-info">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('admin-products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>

                            </form>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection