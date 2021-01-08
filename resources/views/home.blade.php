@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<div>
    
    <img src="{{asset('/images/banner1.jpg')}}" alt="banner1" class="mb-3" id="banner">
</div>
<div class="container">
    <div class="row">
        @foreach ($products as $product)
         <div class="col-md-3 mb-1">
            <product-card
            name="{{$product->product_name}}"
            description = "{{$product->description}}"
            price = "{{$product->price}}"
            product_id = "/products/{{$product->id}}"
            image = "{{asset('/storage/'.$product->image1)}}"
            > </product-card>
         </div>  
        @endforeach      

    </div>
</div>
<div class="row mt-4">
    <div class="col">
         <footer-comp></footer-comp>   
    </div>
</div>

@endsection

