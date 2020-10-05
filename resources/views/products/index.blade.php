@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-3">            
            <form action="/products" method="GET">
            <label for="number_items">Cantidad de resultados</label><br>
            <input type="number"  name="number_items" value={{$items}} style="width: 45px;" min="5" max="15">
            <input type="submit" value="Actualizar" class="" style="background-color: orangered; color: white;border-radius: 5px">
            </form>
            <br>
            <hr>
            <form action="/products" method="GET">
                <span>Filtrar por Provincia</span>
                <br>
                <select name="provincias" id="provincias">
                    <option value="" selected disabled>Todas</option>
                    <option value="">A.M.B.A</option>
                    @foreach ($provincias as $provincia)
                    
                <option value="{{$provincia->nombre}}">{{$provincia->nombre}}</option>
                        
                    @endforeach
                </select>
                <br> 
                <input type="submit" value="Actualizar" class="" style="background-color: orangered; color: white;border-radius: 5px; margin:10px 0px 0px 50px">            </form>
        </div>
        <div class="col-md-9 ">
            @foreach ($products as $product)
                <product-item
                titulo = "{{$product->product_name}}"
                price = "{{$product->price}}"
                foto = "{{asset('/storage/'.$product->image1)}}"
                is_new = "{{$product->is_new}}"
                id = "{{$product->id}}"
                {{-- provincia = "{{$provincia->nombre}}" --}}
                ></product-item>
            @endforeach
        </div>
    </div>

<div class="row mt-5">
    <div class="col-md-4 offset-4">
        {{ $products->appends(['number_items' => $items, 'provincias' => 'caba'])->links() }}
    </div>    
</div>
</div>
<div class="row mt-4">
    <div class="col">
         <footer-comp></footer-comp>   
    </div>
</div>    
@endsection