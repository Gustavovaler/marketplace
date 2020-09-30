@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h1>Algo va aca</h1>
        </div>
        <div class="col-md-9 ">
            @foreach ($products as $product)
                <product-item
                titulo = "{{$product->product_name}}"
                price = "{{$product->price}}"
                foto = "{{$product->image1}}"
                is_new = "{{$product->is_new}}"
                id = "{{$product->id}}"
                {{-- provincia = "{{$provincia->nombre}}" --}}
                ></product-item>
            @endforeach
        </div>
    </div>

<div class="row mt-5">
    <div class="col-md-4 offset-4">
        {{ $products->links() }}
    </div>
    
</div>



</div>



    
@endsection