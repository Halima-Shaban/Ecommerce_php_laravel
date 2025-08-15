<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller{

public function index(){

           $products=Product::with('user')->get();

        //    dd($products);
    
        return view('front.products.index',['products'=>$products]);

}


public function show($id){
        $product=Product::findOrFail($id);
        $products =Product::inRandomOrder()->take(3)->get();

        return view('front.products.show',['product'=>$product,'products'=>$products]);
        // dd($product);
        // if (!$product) {
        //         abort(404);//
        // }

    

}
}