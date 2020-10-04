@extends('layouts.app')


@section('content')
<div class="container">


    <form action="/products/{{$product->id}}" method="POST">
        @method('DELETE')
        @csrf
        Producto a borrar = {{$product->product_name}}

        <input type="submit" class="btn btn-danger" value="eliminar">

    </form>

</div>




<div class="row mt-4">
    <div class="col">
         <footer-comp></footer-comp>   
    </div>
</div> 
@endsection