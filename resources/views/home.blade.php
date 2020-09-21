@extends('layouts.app')

@section('content')
<div>
    <img src="{{asset('/images/banner1.jpg')}}" alt="" style="margin: 0; width= 100%;" class="mb-3">
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
            image = "{{$product->image1}}"
            > </product-card>
         </div>  
        @endforeach      

    </div>
@endsection
