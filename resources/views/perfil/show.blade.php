@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/perfil.css')}}">

<div class="container">
    {{-- ---------------Publicaciones----- --}}
    <div class="mt-2">
        <div class="row ">
            <div class="col-md-12">
               <div class="card">
                <div class="card-header">
                <h5 class="section-title">Publicaciones <span class="num-badge">({{count($publicaciones)}})</span></h5>
                    <span class="btn bot" id="bot">ver</span>
                </div>
                @if ($publicaciones == null)
                <div class="container">
                     No tienes publicaciones activas. <a href="{{url('products/create')}}">Vender ahora</a>   
                </div>
                @else 
                <div class="row">
                    
                    <div class="col-md-10" id="items">
                         @foreach ($publicaciones as $publicacion)
                    <product-item
                    titulo = "{{$publicacion->product_name}}"
                    price = "{{$publicacion->price}}"
                    foto = "{{asset('/storage/'.$publicacion->image1)}}"
                    is_new = "{{$publicacion->is_new}}"
                    id = "{{$publicacion->id}}"
                    ></product-item>
                        
                @endforeach
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
               
                                    
                @endif
               
               </div> 
            </div>
        </div>        
    </div>
    {{-- -------------compras-------    --}}
    <div class="mt-2">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                <div class="card-header">
                    <h5>Compras</h5>
                </div>
                @if ($compras == null)
                    <div class="container">
                        No has realizado ninguna compra. 
                    </div>                    
                @endif
               </div> 
            </div>
        </div>        
    </div>
    {{-- ---------------- ventas ---------------- --}}
    <div class="mt-2">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                <div class="card-header">
                    <h5>Ventas</h5>
                </div>
                @if (empty($ventas))
                    <div class="container">
                        Aun no tienes ventas realizadas. 
                    </div>
                @endif
               </div> 
            </div>
        </div>        
    </div>
    {{-- --------------- confianza -------------- --}}
    <div class="mt-2">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                <div class="card-header">
                    <h5>Confianza</h5>
                </div>
                @if ($confianza == null)
                    <div class="container">
                        Debes realizar ventas para obtener puntos de confianza
                    </div>
                @endif
               </div> 
            </div>
        </div>        
    </div>
    {{-- --------datos------------------ --}}
    <div class="mt-2">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                <div class="card-header">
                   <h5> Mis Datos</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">E-mail: {{$user->email}}</li>
                    <li class="list-group-item">Dirección: {{$user->direccion}} </li>
                    <li class="list-group-item">Teléfono: {{$user->telefono}}</li>
                  </ul>
               </div> 
            </div>
        </div>        
    </div>
    {{-- -----------------MERCADOPAGO---------------------- --}}
    <div class="mt-2">
        <div class="row mb-2">
            <div class="col-md-12">
               <div class="card mercadopago-card">
                <div class="card-header mercadopago-header">
                    <h5>MERCADOPAGO</h5>
                </div>
                <div class="card-body">
                    Proximamente podrás cobrar con MercadoPago.
                </div>
                
               </div> 
            </div>
        </div>        
    </div>
</div>
<div>
    <footer-comp></footer-comp>
</div>
    
@endsection
@section('scripts')
<script>
     $(document).ready(function(){
       $('#bot').click(function(){
           $('#items').toggle(200);
       })
     });
</script>
   
@endsection