@extends('layouts.app')

@section('content')
<product-detail
         name = "{{$product->product_name}}"
         description = "{{$product->description}}"
         disponibility = "{{$product->disp}}"
         quantity = "{{$product->quantity}}"
         vistas = "{{$product->visits}}"
         price = "{{$product->price}}"
         image1 = "{{asset('/storage/'.$product->image1)}}"
         image2 = "{{$product->image2}}"
         product_id = "{{$product->id}}"
         created = "{{$product->created_at}}"
         is_new = "{{$product->is_new}}"
         seller = "{{$seller}}"
         provincia = "{{$provincia->nombre}}"
         localidad ="{{$localidad->nombre}}"
         categoria = "{{$categoria->nombre}}"
         marca = "{{$product->marca}}"
></product-detail> 
<div class="row mt-4">
    <div class="col">
         <footer-comp></footer-comp>   
    </div>
</div>   
@endsection