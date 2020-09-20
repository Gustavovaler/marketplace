@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($products as $product)
         <div class="col-md-3 mb-1">
            <product-card
             name="{{$product->product_name}}"
             description = "{{$product->description}}"
             > </product-card>
         </div>  
        @endforeach      

    </div>
@endsection
