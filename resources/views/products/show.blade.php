@extends('layouts.app')

@section('content')
<product-detail
         name = "{{$product->product_name}}"
         description = "{{$product->description}}"
         quantity = "{{$product->quantity}}"
         price = "{{$product->price}}"
         image1 = "{{$product->image1}}"
         image2 = "{{$product->image2}}"
         product_id = "{{$product->id}}"
         created = "{{$product->created_at}}"
         is_new = "{{$product->is_new}}"
         seller = "{{$seller}}"
         provincia = "{{$provincia->nombre}}"
         localidad ="{{$localidad->nombre}}"
></product-detail>
    
@endsection