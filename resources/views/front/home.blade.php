@extends('front.app')
@section('content')

<header class="bg-primary text-white text-center py-5">
  <div class="container">
    <h1 class="display-5 fw-bold">Welcome to MyShop</h1>
    <p class="lead">Your one‑stop shop for everything you love</p>
    <a href="products.html" class="btn btn-light btn-lg mt-2">Shop Now</a>
  </div>
</header>

<section class="container my-5">
  <h2 class="text-center mb-4">best seller</h2>
  <div class="row g-4">

    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card h-100 shadow-sm">
        <img src="https://picsum.photos/seed/feat1/600/400" class="card-img-top" alt="Product 1">
        <div class="card-body text-center">
          <h5 class="card-title">Featured 1</h5>
          <p class="card-text">$ 19.99</p>
          <a href="products.html" class="btn btn-primary">View All Products</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card h-100 shadow-sm">
        <img src="https://picsum.photos/seed/feat2/600/400" class="card-img-top" alt="Product 2">
        <div class="card-body text-center">
          <h5 class="card-title">Featured 2</h5>
          <p class="card-text">$ 29.99</p>
          <a href="products.html" class="btn btn-primary">View All Products</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card h-100 shadow-sm">
        <img src="https://picsum.photos/seed/feat3/600/400" class="card-img-top" alt="Product 3">
        <div class="card-body text-center">
          <h5 class="card-title">Featured 3</h5>
          <p class="card-text">$ 39.99</p>
          <a href="products.html" class="btn btn-primary">View All Products</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card h-100 shadow-sm">
        <img src="https://picsum.photos/seed/feat4/600/400" class="card-img-top" alt="Product 4">
        <div class="card-body text-center">
          <h5 class="card-title">Featured 4</h5>
          <p class="card-text">$ 49.99</p>
          <a href="products.html" class="btn btn-primary">View All Products</a>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection