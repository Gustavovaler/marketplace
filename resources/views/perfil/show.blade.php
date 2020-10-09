@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/perfil.css')}}">
<div class="container">
    {{-- ---------------Publicaciones----- --}}
    <div class="publicaciones mt-2">
        <div class="row ">
            <div class="col-md-12">
               <div class="card">
                publicaciones
               </div> 
            </div>
        </div>        
    </div>
    {{-- -------------compras-------    --}}
    <div class="compras mt-2">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                compras
               </div> 
            </div>
        </div>        
    </div>
    {{-- ---------------- ventas ---------------- --}}
    <div class="ventas mt-2">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                ventas
               </div> 
            </div>
        </div>        
    </div>
    {{-- --------------- confianza -------------- --}}
    <div class="confianza mt-2">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                confianza
               </div> 
            </div>
        </div>        
    </div>
    {{-- --------datos------------------ --}}
    <div class="datos mt-2">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                <div class="card-header">
                    Mis Datos
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
</div>
    
@endsection