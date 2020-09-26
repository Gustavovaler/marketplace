@extends('layouts.app')

@section('content')
<div class="container">

@foreach ($products as $product)
    <product-item
    titulo = "{{$product->product_name}}"
    price = "{{$product->price}}"
    foto = "{{$product->image1}}"
    is_new = "{{$product->is_new}}"
    {{-- provincia = "{{$provincia->nombre}}" --}}
    ></product-item>
@endforeach

</div>



    
@endsection